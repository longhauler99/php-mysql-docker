pipeline {
    agent any

    stages {
        stage('Install Dependencies') {
            steps {
                sh 'composer install'
            }
        }

        stage('Run Tests') {
            steps {
                sh './vendor/bin/phpunit --configuration phpunit.xml'
            }
        }

        stage('Deploy') {
            steps{
                echo 'Deploying.....'
            }
        }
    }
}