print("Media Final!")

numnota=int(input("Insira quantas notas serão calculdo: "))
media = 0
for i in range(1,numnota+1):
    nummedia = float(input(f"Insira a {i}º nota: "))

    media = media+nummedia

mediaf = media/numnota



print(f"A media final é: {mediaf}")
print(numnota)
print(media)