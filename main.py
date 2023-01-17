plateau = [" ", " ", " ", " ", " ", " ", " ", " ", " "]

def afficher_plateau():
    print(" {} | {} | {} ".format(plateau[0], plateau[1], plateau[2]))
    print("---+---+---")
    print(" {} | {} | {} ".format(plateau[3], plateau[4], plateau[5]))
    print("---+---+---")
    print(" {} | {} | {} ".format(plateau[6], plateau[7], plateau[8]))

def verifier_gagnant():
    if (plateau[0] == plateau[1] == plateau[2] and plateau[0] != " ") or
        (plateau[3] == plateau[4] == plateau[5] and plateau[3] != " ") or
        (plateau[6] == plateau[7] == plateau[8] and plateau[6] != " ") or
        (plateau[0] == plateau[3] == plateau[6] and plateau[0] != " ") or
        (plateau[1] == plateau[4] == plateau[7] and plateau[1] != " ") or
        (plateau[2] == plateau[5] == plateau[8] and plateau[2] != " ") or
        (plateau[0] == plateau[4] == plateau[8] and plateau[0] != " ") or
         plateau[2] == plateau[4] == plateau[6] and plateau[2] != " "):
            return True
    else:
        return False

joueur = "X"
partie_finie = False
while not partie_finie:
    afficher_plateau()
    print("Joueur {} : où voulez-vous jouer?".format(joueur))
    choix = int(input())
    if plateau[choix] == " ":
        plateau[choix] = joueur
        if verifier_gagnant():
            afficher_plateau()
            print("Joueur {} a gagné!".format(joueur))
            partie_finie = True
        else:
            if " " not in plateau:
                afficher_plateau()
                print("Match nul!")
                partie_finie = True
            else:
                joueur = "O" if joueur == "X" else "X"
    else:
        print("Emplacement déjà utilisé, veuillez en choisir un autre.")