pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build') {
            steps {
                echo 'Static website - no build required'
            }
        }

        stage('Deploy Check') {
            steps {
                echo 'Website ready for GitHub Pages'
            }
        }
    }
}
