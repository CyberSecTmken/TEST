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
      
           stage('zap') {
            steps {
                script {
                    startZap(host: "127.0.0.1", port: 9091, timeout:500, zapHome: "/snap/zaproxy/current", allowedHosts:['example.com']) // Start ZAP at /opt/zaproxy/zap.sh, allowing scans on github.com (if allowedHosts is not provided, any local addresses will be used
                   runZapCrawler(host: "http://example.com")
                   runZapAttack()
                    archiveZap(failHighAlerts: 1, failMediumAlerts: 1, failLowAlerts: 0)
                }
            }
        }
   
   
}
 

}
