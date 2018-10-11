pipeline {
  agent {
    docker {
      image 'composer:1.7.2'
      args '-p 8090:8090'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
      }
    }
  }
}