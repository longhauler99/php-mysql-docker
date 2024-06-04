pipeline {
    agent any

    stages {
        stage('Install Composer') {
            steps {
                sh '''
                if ! [ -x "$(command -v composer)" ]; then
                  echo "Installing Composer..."
                  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
                  php composer-setup.php
                  php -r "unlink('composer-setup.php');"
                  sudo mv composer.phar /usr/local/bin/composer
                else
                  echo "Composer is already installed"
                fi
                '''
            }
        }
        
        stage('Run Tests') {
            steps {
                sh './vendor/bin/phpunit --configuration phpunit.xml'
            }
        }

        stage('Deploy') {
            steps{ 
                echo 'Deploying....'
            }
        }
    }
}