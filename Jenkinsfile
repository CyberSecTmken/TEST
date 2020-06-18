pipeline {
   agent any

   stages {
      stage('Hello') {
         steps {
            echo 'Hello World'
         }
      }
   

    
      
  
      
      stage ('owaspchecker') {
            steps {
          sh 'rm owasp* || true'
         sh 'wget "https://raw.githubusercontent.com/CyberSecTmken/TEST/master/owasp-dependency-check.sh" '
         sh 'chmod +x owasp-dependency-check.sh'
         sh 'bash owasp-dependency-check.sh'
            }
        }  
   
}
 

}
