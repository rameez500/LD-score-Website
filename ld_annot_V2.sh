export PATH="/home/princessbaab33/miniconda3/envs/ldsc/bin:$PATH"


/home/princessbaab33/miniconda3/envs/ldsc/bin/python \
/home/princessbaab33/ldsc/munge_sumstats.py \
--sumstats $2 \
--merge-alleles /home/princessbaab33/analysis/w_hm3.snplist \
--snp SNP --p p --a1 Allele1 --a2 Allele2  \
--chunksize 50000 \
--out $3sum_stat


for i in {1..22}
do
/home/princessbaab33/miniconda3/envs/ldsc/bin/python \
/home/princessbaab33/ldsc/make_annot.py \
--bed-file $1 \
--bimfile /home/princessbaab33/analysis/1000G_EUR_Phase3_plink/1000G.EUR.QC.${i}.bim \
--annot-file $3test.${i}.annot.gz
done


for i in {1..22}
do
/home/princessbaab33/miniconda3/envs/ldsc/bin/python \
/home/princessbaab33/ldsc/ldsc.py \
--l2 \
--bfile /home/princessbaab33/analysis/1000G_EUR_Phase3_plink/1000G.EUR.QC.${i} \
--ld-wind-cm 1 \
--annot $3test.${i}.annot.gz \
--thin-annot \
--out $3test.${i} \
--print-snps /home/princessbaab33/analysis/listHM3.txt
done


/home/princessbaab33/miniconda3/envs/ldsc/bin/python \
/home/princessbaab33/ldsc/ldsc.py \
--h2 $3sum_stat.sumstats.gz \
--ref-ld-chr $3test.,/home/princessbaab33/analysis/baseline/baselineLD. \
--w-ld-chr /home/princessbaab33/analysis/1000G_Phase3_weights_hm3_no_MHC/weights.hm3_noMHC. \
--overlap-annot \
--print-coefficients \
--frqfile-chr /home/princessbaab33/analysis/1000G_Phase3_frq/1000G.EUR.QC. \
--out $3results2
