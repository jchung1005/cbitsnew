#!/bin/sh
LDFLAGS="-L/Users/jeaniechung/projects/cbits/common/lib $LDFLAGS"
export LDFLAGS
CFLAGS="-I/Users/jeaniechung/projects/cbits/common/include $CFLAGS"
export CFLAGS
		    
PKG_CONFIG_PATH="/Users/jeaniechung/projects/cbits/common/lib/pkgconfig"
export PKG_CONFIG_PATH
