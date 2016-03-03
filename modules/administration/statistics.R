setwd("/home/s-degoul/public_html/Teacher/modules/administration/statistics/")
graphic_path <- "graphics/"

Sys.setlocale(category = "LC_ALL", locale = "fr_FR.UTF-8")

#######
# Chargement des données

patients <- read.csv("patients.csv")
users <- read.csv("users.csv")
user_evals <- read.csv("user_evals.csv")

#######
# Data management

patients$patient_sex <- factor(patients$patient_sex, labels=c("fille","garçon"))
patients$patient_date_birth <- as.POSIXct(patients$patient_date_birth)
patients$age <- as.numeric(difftime(format(Sys.Date(),"%Y-%m-%d"),patients$patient_date_birth, units="days")/365)


#######
# Analyses

png(paste(graphic_path, "patient_sex.png", sep=""), width=300, height=300, units="px")
par(mar=c(1,1,1,1))
pie(table(patients$patient_sex), col=c("pink","blue"), main="")
dev.off()


png(paste(graphic_path, "patient_age.png", sep=""), width=700, height=350, units="px")
par(las=1, mar=c(4,4,2,2), mfrow=c(1,2))
hist(patients$age, col="grey", xlab="âge", ylab="Nombre", main="", xlim=c(0, max(patients$age, na.rm=T)+5))
boxplot(patients$age, col="grey", ylab="âge", main="")
dev.off()