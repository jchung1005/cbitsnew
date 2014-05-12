exp_exec_prefix = /Users/jeaniechung/projects/cbits/apache2
exp_bindir = /Users/jeaniechung/projects/cbits/apache2/bin
exp_sbindir = /Users/jeaniechung/projects/cbits/apache2/bin
exp_libdir = /Users/jeaniechung/projects/cbits/apache2/lib
exp_libexecdir = /Users/jeaniechung/projects/cbits/apache2/modules
exp_mandir = /Users/jeaniechung/projects/cbits/apache2/man
exp_sysconfdir = /Users/jeaniechung/projects/cbits/apache2/conf
exp_datadir = /Users/jeaniechung/projects/cbits/apache2
exp_installbuilddir = /Users/jeaniechung/projects/cbits/apache2/build
exp_errordir = /Users/jeaniechung/projects/cbits/apache2/error
exp_iconsdir = /Users/jeaniechung/projects/cbits/apache2/icons
exp_htdocsdir = /Users/jeaniechung/projects/cbits/apache2/htdocs
exp_manualdir = /Users/jeaniechung/projects/cbits/apache2/manual
exp_cgidir = /Users/jeaniechung/projects/cbits/apache2/cgi-bin
exp_includedir = /Users/jeaniechung/projects/cbits/apache2/include
exp_localstatedir = /Users/jeaniechung/projects/cbits/apache2
exp_runtimedir = /Users/jeaniechung/projects/cbits/apache2/logs
exp_logfiledir = /Users/jeaniechung/projects/cbits/apache2/logs
exp_proxycachedir = /Users/jeaniechung/projects/cbits/apache2/proxy
EGREP = /usr/bin/grep -E
PCRE_LIBS = -L/Users/jeaniechung/projects/cbits/common/lib -lpcre
SHLTCFLAGS = -prefer-pic
LTCFLAGS = -prefer-non-pic -static
MKINSTALLDIRS = /Users/jeaniechung/projects/cbits/apache2/build/mkdir.sh
INSTALL = $(LIBTOOL) --mode=install /Users/jeaniechung/projects/cbits/apache2/build/install.sh -c
MATH_LIBS =
CRYPT_LIBS =
DTRACE = true
PICFLAGS =
PILDFLAGS =
INSTALL_DSO = yes
ab_CFLAGS = -I/Users/jeaniechung/projects/cbits/common/include
ab_LDFLAGS = -L/Users/jeaniechung/projects/cbits/common/lib -lssl -lcrypto -lpthread
NONPORTABLE_SUPPORT = checkgid fcgistarter
progname = httpd
OS = unix
SHLIBPATH_VAR = DYLD_LIBRARY_PATH
AP_BUILD_SRCLIB_DIRS =
AP_CLEAN_SRCLIB_DIRS =
bindir = ${exec_prefix}/bin
sbindir = ${exec_prefix}/bin
cgidir = ${datadir}/cgi-bin
logfiledir = ${localstatedir}/logs
exec_prefix = ${prefix}
datadir = ${prefix}
localstatedir = ${prefix}
mandir = ${prefix}/man
libdir = ${exec_prefix}/lib
libexecdir = ${exec_prefix}/modules
htdocsdir = ${datadir}/htdocs
manualdir = ${datadir}/manual
includedir = ${prefix}/include
errordir = ${datadir}/error
iconsdir = ${datadir}/icons
sysconfdir = ${prefix}/conf
installbuilddir = ${datadir}/build
runtimedir = ${localstatedir}/logs
proxycachedir = ${localstatedir}/proxy
other_targets =
progname = httpd
prefix = /Users/jeaniechung/projects/cbits/apache2
AWK = awk
CC = gcc -std=gnu99
CPP = gcc -E
CXX =
CPPFLAGS = -I/Users/jeaniechung/projects/cbits/common/include
CFLAGS = -I/Users/jeaniechung/projects/cbits/common/include -arch x86_64
CXXFLAGS =
LTFLAGS = --silent
LDFLAGS = -L/Users/jeaniechung/projects/cbits/common/lib -liconv
LT_LDFLAGS =
SH_LDFLAGS =
LIBS =
DEFS =
INCLUDES =
NOTEST_CPPFLAGS =
NOTEST_CFLAGS =
NOTEST_CXXFLAGS =
NOTEST_LDFLAGS =
NOTEST_LIBS =
EXTRA_CPPFLAGS = -DDARWIN -DSIGPROCMASK_SETS_THREAD_MASK -no-cpp-precomp -DDARWIN_10
EXTRA_CFLAGS =
EXTRA_CXXFLAGS =
EXTRA_LDFLAGS =
EXTRA_LIBS =
EXTRA_INCLUDES = -I$(includedir) -I. -I/Users/jeaniechung/projects/cbits/common/include/apr-1 -I/Users/jeaniechung/projects/cbits/common/include
INTERNAL_CPPFLAGS =
LIBTOOL = /Users/jeaniechung/projects/cbits/common/build-1/libtool --silent
SHELL = /bin/sh
RSYNC = /usr/bin/rsync
SH_LIBS =
SH_LIBTOOL = $(LIBTOOL)
MK_IMPLIB =
MKDEP = $(CC) -MM
INSTALL_PROG_FLAGS =
ENABLED_DSO_MODULES = ,authn_file,authn_core,authz_host,authz_groupfile,authz_user,authz_core,access_compat,auth_basic,reqtimeout,filter,mime,log_config,env,headers,setenvif,version,proxy,proxy_connect,proxy_ftp,proxy_http,proxy_fcgi,proxy_scgi,proxy_wstunnel,proxy_ajp,proxy_balancer,proxy_express,lbmethod_byrequests,lbmethod_bytraffic,lbmethod_bybusyness,lbmethod_heartbeat,mpm_prefork,unixd,status,autoindex,dir,alias
LOAD_ALL_MODULES = no
APR_BINDIR = /Users/jeaniechung/projects/cbits/common/bin
APR_INCLUDEDIR = /Users/jeaniechung/projects/cbits/common/include/apr-1
APR_VERSION = 1.5.0
APR_CONFIG = /Users/jeaniechung/projects/cbits/common/bin/apr-1-config
APU_BINDIR = /Users/jeaniechung/projects/cbits/common/bin
APU_INCLUDEDIR = /Users/jeaniechung/projects/cbits/common/include/apr-1
APU_VERSION = 1.5.3
APU_CONFIG = /Users/jeaniechung/projects/cbits/common/bin/apu-1-config
