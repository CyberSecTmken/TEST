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
            sh "python3 /home/adminme/Downloads/truffleHog-dev/truffleHog/truffleHog.py --regex --json --max_depth 1 https://github.com/CyberSecTmken/TEST.git"
         }
      }
   
   
}

}
