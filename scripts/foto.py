from lib.deteccao import Deteccao
import sys

try:
    print(sys.argv)
    dt = Deteccao()
    foto = sys.argv[1]
    dt.selecionarImagem(foto)
    dt.detectaRosto()

    #Caso deseje salvar
    fotoDestino = sys.argv[2]
    print(fotoDestino)
    dt.salvar(fotoDestino)

    #Caso deseje exibir na tela
    #dt.exibir()
    print('Concluido')
except:
    print('Erro')