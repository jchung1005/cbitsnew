#!/bin/sh
echo $DYLD_LIBRARY_PATH | egrep "/Users/jeaniechung/projects/cbits/common" > /dev/null
if [ $? -ne 0 ] ; then
PATH="/Users/jeaniechung/projects/cbits/varnish/bin:/Users/jeaniechung/projects/cbits/sqlite/bin:/Users/jeaniechung/projects/cbits/php/bin:/Users/jeaniechung/projects/cbits/mysql/bin:/Users/jeaniechung/projects/cbits/apache2/bin:/Users/jeaniechung/projects/cbits/common/bin:$PATH"
export PATH
DYLD_LIBRARY_PATH="/Users/jeaniechung/projects/cbits/varnish/lib:/Users/jeaniechung/projects/cbits/varnish/lib/varnish:/Users/jeaniechung/projects/cbits/varnish/lib/varnish/vmods:/Users/jeaniechung/projects/cbits/sqlite/lib:/Users/jeaniechung/projects/cbits/mysql/lib:/Users/jeaniechung/projects/cbits/apache2/lib:/Users/jeaniechung/projects/cbits/common/lib:$DYLD_LIBRARY_PATH"
export DYLD_LIBRARY_PATH
fi

##### VARNISH ENV #####
		
      ##### SQLITE ENV #####
			
LDAPCONF=/Users/jeaniechung/projects/cbits/common/etc/openldap/ldap.conf
export LDAPCONF
##### PHP ENV #####
		    
##### MYSQL ENV #####

##### APACHE ENV #####

##### CURL ENV #####
CURL_CA_BUNDLE=/Users/jeaniechung/projects/cbits/common/openssl/certs/curl-ca-bundle.crt
export CURL_CA_BUNDLE
##### SSL ENV #####
SSL_CERT_FILE=/Users/jeaniechung/projects/cbits/common/openssl/certs/curl-ca-bundle.crt
export SSL_CERT_FILE
OPENSSL_CONF=/Users/jeaniechung/projects/cbits/common/openssl/openssl.cnf
export OPENSSL_CONF


. /Users/jeaniechung/projects/cbits/scripts/build-setenv.sh
