pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo "Running ${env.BUILD_ID} for ${env.JOB_NAME} on ${env.JENKINS_URL}"
            }
        }

        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }

        stage('Deploy') {
            steps{
                echo 'Deploying.....'
            }
        }

        stage('Celebration') {
            steps{
                echo 'Hurraaay.....'
            }
        }
    }
}