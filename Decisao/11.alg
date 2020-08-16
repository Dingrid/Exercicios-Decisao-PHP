algoritmo "semnome"
// Função :
// Autor :
// Data : 04/06/2017
// Seção de Declarações
var
HI,MI,HF,MF:inteiro
durh,durm:real
inicio
// Seção de Comandos
escreval("Digite a hora inicial do jogo:")
leia(HI)
escreval("Digite o minuto inicial do jogo:")
leia(MI)
escreval("Digite a hora final do jogo:")
leia(HF)
escreval("Digite o minuto final do jogo:")
leia(MF)

se (MI>MF) entao
   MF<-MF+60
   HF<-HF-1
fimse

se (HI>HF) entao
   HF<-HF+24
fimse

durm<- MF-MI
durh<- HF-HI
escreval("O jogo durou ",durh," horas e ",durm," minutos")
fimalgoritmo
