pipeline {
   agent any

   stages {
      stage('Hello') {
         steps {
            echo 'Hello World'
         }
      }
   }

   
      stages {
      stage('check-sec') {
         steps {
           sh "pip install truffleHog"
            sh "truffleHog --regex --entropy=False https://github.com/CyberSecTmken/TEST.git"
         }
      }
   }
   
}
