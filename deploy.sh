#!/bin/bash

# Fonction pour cloner la branche source vers la branche cible
clone_branch() {
  source_branch=$1
  target_branch=$2

  echo "Clonage de la branche $source_branch vers la branche $target_branch..."

  git checkout $source_branch
  git pull origin $source_branch
  git checkout -b $target_branch
  git push --set-upstream origin $target_branch

  echo "Le clonage de la branche $source_branch vers la branche $target_branch est terminé."
}

vendor/bin/phpunit tests
# Cloner et monter depuis develop vers preprod
clone_branch develop preprod

vendor/bin/phpunit tests
# Cloner et monter depuis preprod vers master
clone_branch preprod master