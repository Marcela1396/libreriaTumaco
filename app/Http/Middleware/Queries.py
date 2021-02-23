
if __name__ == '__main__':
    t= int(input())
    for n in range(t):
        q = int(input())
        lista = []

        for j in range(q):
            l=  int(input())
            if (l == 1):
                number= int(input())
                lista.append(number)
            elif( l== 2):
                if(len(lista) != 0):
                    lista.pop()
            elif (l==3):
                if(len(lista) == 0):
                    print('Empty!')
                else:
                    maximo = max(lista)
                    minimo = min(lista)
                    print(abs(maximo - minimo))