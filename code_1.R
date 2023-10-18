args <- commandArgs(TRUE)
N <- args[1]
x <- rnorm(N,0,1)

png(filename="temp10.png", width=500, height=500)
#png(filename="/pathway/TempFile/temp10.png", width=500, height=500)
hist(x, col="lightblue")
dev.off()
