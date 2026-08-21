#!/bin/bash
# chmod +x gitpush.sh
# chmod +x /Users/vmbfesalviano/vmb/vmb_shma/scripts/gitpush.sh && /Users/vmbfesalviano/vmb/vmb_shma/scripts/gitpush.sh "Adiciona funcionalidade de scripts"
# sh scripts/gitpush.sh

# Armazena a mensagem de commit
# COMMIT_MSG="$1"
COMMIT_MSG="${1:-bugfix}"

git pull

# Adiciona todos os arquivos modificados
git add .

# Faz o commit com a mensagem fornecida
git commit -m "$COMMIT_MSG"

# Faz o push para o repositório de prod
git push

# Mensagem de conclusão
echo "Push realizado com sucesso! ("$COMMIT_MSG")"