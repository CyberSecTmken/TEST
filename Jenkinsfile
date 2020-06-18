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
      
  
      
      stage ('owaspchecker') {
            steps {
               sh "rm owaspchecker.sh"
               sh "wget 'https://raw.githubusercontent.com/CyberSecTmken/TEST/master/owaspchecker.sh'"
               sh 'chmod -x owaspchecker.sh'
               sh 'bash owaspchecker.sh'
            }
        }  
   
}
 

}
