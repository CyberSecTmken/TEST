pipeline {
   agent any

   stages {
      stage('Hello') {
         steps {
            echo 'Hello World'
         }
      }
   

      stage('check-sec') {
         steps {
           sh "pip3 install truffleHog"
            sh "truffleHog --regex --entropy=False https://github.com/CyberSecTmken/TEST.git"
         }
      }
   
   
}

}
