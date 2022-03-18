srcdir = /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3
builddir = /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3
top_srcdir = /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3
top_builddir = /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3
EGREP = /bin/grep -E
SED = /bin/sed
CONFIGURE_COMMAND = './configure' '--enable-xdebug' '--with-php-config=/usr/local/php-cgi/7.4/bin/php-config' '--prefix=/home/w/wmdev/.local'
CONFIGURE_OPTIONS = '--enable-xdebug' '--with-php-config=/usr/local/php-cgi/7.4/bin/php-config' '--prefix=/home/w/wmdev/.local'
SHLIB_SUFFIX_NAME = so
SHLIB_DL_SUFFIX_NAME = so
AWK = nawk
shared_objects_xdebug = xdebug.lo src/base/base.lo src/base/filter.lo src/lib/usefulstuff.lo src/lib/compat.lo src/lib/crc32.lo src/lib/file.lo src/lib/hash.lo src/lib/headers.lo src/lib/lib.lo src/lib/llist.lo src/lib/log.lo src/lib/set.lo src/lib/str.lo src/lib/timing.lo src/lib/var.lo src/lib/var_export_html.lo src/lib/var_export_line.lo src/lib/var_export_text.lo src/lib/var_export_xml.lo src/lib/xml.lo src/coverage/branch_info.lo src/coverage/code_coverage.lo src/debugger/com.lo src/debugger/debugger.lo src/debugger/handler_dbgp.lo src/debugger/handlers.lo src/develop/develop.lo src/develop/monitor.lo src/develop/php_functions.lo src/develop/stack.lo src/develop/superglobals.lo src/gcstats/gc_stats.lo src/profiler/profiler.lo src/tracing/trace_computerized.lo src/tracing/trace_html.lo src/tracing/trace_textual.lo src/tracing/tracing.lo
PHP_PECL_EXTENSION = xdebug
XDEBUG_SHARED_LIBADD = -lm -lz
PHP_MODULES =
PHP_ZEND_EX = $(phplibdir)/xdebug.la
all_targets = $(PHP_MODULES) $(PHP_ZEND_EX)
install_targets = install-modules install-headers
prefix = /usr/local/php/cgi/7.4
exec_prefix = $(prefix)
libdir = ${exec_prefix}/lib
prefix = /usr/local/php/cgi/7.4
phplibdir = /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/modules
phpincludedir = /usr/local/php/cgi/7.4/include/php
CC = cc
CFLAGS = -g -O2
CFLAGS_CLEAN = $(CFLAGS)
CPP = cc -E
CPPFLAGS = -DHAVE_CONFIG_H
CXX =
CXXFLAGS =
CXXFLAGS_CLEAN = $(CXXFLAGS)
EXTENSION_DIR = /usr/local/php/cgi/7.4/lib/php/20190902
PHP_EXECUTABLE = /usr/local/php/cgi/7.4/bin/php
EXTRA_LDFLAGS =
EXTRA_LIBS =
INCLUDES = -I/usr/local/php/cgi/7.4/include/php -I/usr/local/php/cgi/7.4/include/php/main -I/usr/local/php/cgi/7.4/include/php/TSRM -I/usr/local/php/cgi/7.4/include/php/Zend -I/usr/local/php/cgi/7.4/include/php/ext -I/usr/local/php/cgi/7.4/include/php/ext/date/lib -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src
LFLAGS =
LDFLAGS =
SHARED_LIBTOOL =
LIBTOOL = $(SHELL) $(top_builddir)/libtool
SHELL = /bin/bash
INSTALL_HEADERS =
mkinstalldirs = $(top_srcdir)/build/shtool mkdir -p
INSTALL = $(top_srcdir)/build/shtool install -c
INSTALL_DATA = $(INSTALL) -m 644

DEFS = -DPHP_ATOM_INC -I$(top_builddir)/include -I$(top_builddir)/main -I$(top_srcdir)
COMMON_FLAGS = $(DEFS) $(INCLUDES) $(EXTRA_INCLUDES) $(CPPFLAGS) $(PHP_FRAMEWORKPATH)

all: $(all_targets)
	@echo
	@echo "Build complete."
	@echo "Don't forget to run 'make test'."
	@echo

build-modules: $(PHP_MODULES) $(PHP_ZEND_EX)

build-binaries: $(PHP_BINARIES)

libphp$(PHP_MAJOR_VERSION).la: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(LIBTOOL) --mode=link $(CC) $(CFLAGS) $(EXTRA_CFLAGS) -rpath $(phptempdir) $(EXTRA_LDFLAGS) $(LDFLAGS) $(PHP_RPATHS) $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@
	-@$(LIBTOOL) --silent --mode=install cp $@ $(phptempdir)/$@ >/dev/null 2>&1

libs/libphp$(PHP_MAJOR_VERSION).bundle: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(CC) $(MH_BUNDLE_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS) $(EXTRA_LDFLAGS) $(PHP_GLOBAL_OBJS:.lo=.o) $(PHP_SAPI_OBJS:.lo=.o) $(PHP_FRAMEWORKS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@ && cp $@ libs/libphp$(PHP_MAJOR_VERSION).so

install: $(all_targets) $(install_targets)

install-sapi: $(OVERALL_TARGET)
	@echo "Installing PHP SAPI module:       $(PHP_SAPI)"
	-@$(mkinstalldirs) $(INSTALL_ROOT)$(bindir)
	-@if test ! -r $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME); then \
		for i in 0.0.0 0.0 0; do \
			if test -r $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME).$$i; then \
				$(LN_S) $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME).$$i $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME); \
				break; \
			fi; \
		done; \
	fi
	@$(INSTALL_IT)

install-binaries: build-binaries $(install_binary_targets)

install-modules: build-modules
	@test -d modules && \
	$(mkinstalldirs) $(INSTALL_ROOT)$(EXTENSION_DIR)
	@echo "Installing shared extensions:     $(INSTALL_ROOT)$(EXTENSION_DIR)/"
	@rm -f modules/*.la >/dev/null 2>&1
	@$(INSTALL) modules/* $(INSTALL_ROOT)$(EXTENSION_DIR)

install-headers:
	-@if test "$(INSTALL_HEADERS)"; then \
		for i in `echo $(INSTALL_HEADERS)`; do \
			i=`$(top_srcdir)/build/shtool path -d $$i`; \
			paths="$$paths $(INSTALL_ROOT)$(phpincludedir)/$$i"; \
		done; \
		$(mkinstalldirs) $$paths && \
		echo "Installing header files:          $(INSTALL_ROOT)$(phpincludedir)/" && \
		for i in `echo $(INSTALL_HEADERS)`; do \
			if test "$(PHP_PECL_EXTENSION)"; then \
				src=`echo $$i | $(SED) -e "s#ext/$(PHP_PECL_EXTENSION)/##g"`; \
			else \
				src=$$i; \
			fi; \
			if test -f "$(top_srcdir)/$$src"; then \
				$(INSTALL_DATA) $(top_srcdir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			elif test -f "$(top_builddir)/$$src"; then \
				$(INSTALL_DATA) $(top_builddir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			else \
				(cd $(top_srcdir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i; \
				cd $(top_builddir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i) 2>/dev/null || true; \
			fi \
		done; \
	fi

PHP_TEST_SETTINGS = -d 'open_basedir=' -d 'output_buffering=0' -d 'memory_limit=-1'
PHP_TEST_SHARED_EXTENSIONS =  ` \
	if test "x$(PHP_MODULES)" != "x"; then \
		for i in $(PHP_MODULES)""; do \
			. $$i; $(top_srcdir)/build/shtool echo -n -- " -d extension=$$dlname"; \
		done; \
	fi; \
	if test "x$(PHP_ZEND_EX)" != "x"; then \
		for i in $(PHP_ZEND_EX)""; do \
			. $$i; $(top_srcdir)/build/shtool echo -n -- " -d zend_extension=$(top_builddir)/modules/$$dlname"; \
		done; \
	fi`
PHP_DEPRECATED_DIRECTIVES_REGEX = '^(magic_quotes_(gpc|runtime|sybase)?|(zend_)?extension(_debug)?(_ts)?)[\t\ ]*='

test: all
	@if test ! -z "$(PHP_EXECUTABLE)" && test -x "$(PHP_EXECUTABLE)"; then \
		INI_FILE=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r 'echo php_ini_loaded_file();' 2> /dev/null`; \
		if test "$$INI_FILE"; then \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_FILE" > $(top_builddir)/tmp-php.ini; \
		else \
			echo > $(top_builddir)/tmp-php.ini; \
		fi; \
		INI_SCANNED_PATH=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r '$$a = explode(",\n", trim(php_ini_scanned_files())); echo $$a[0];' 2> /dev/null`; \
		if test "$$INI_SCANNED_PATH"; then \
			INI_SCANNED_PATH=`$(top_srcdir)/build/shtool path -d $$INI_SCANNED_PATH`; \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_SCANNED_PATH"/*.ini >> $(top_builddir)/tmp-php.ini; \
		fi; \
		TEST_PHP_EXECUTABLE=$(PHP_EXECUTABLE) \
		TEST_PHP_SRCDIR=$(top_srcdir) \
		CC="$(CC)" \
			$(PHP_EXECUTABLE) -n -c $(top_builddir)/tmp-php.ini $(PHP_TEST_SETTINGS) $(top_srcdir)/run-tests.php -n -c $(top_builddir)/tmp-php.ini -d extension_dir=$(top_builddir)/modules/ $(PHP_TEST_SHARED_EXTENSIONS) $(TESTS); \
		TEST_RESULT_EXIT_CODE=$$?; \
		rm $(top_builddir)/tmp-php.ini; \
		exit $$TEST_RESULT_EXIT_CODE; \
	else \
		echo "ERROR: Cannot run tests without CLI sapi."; \
	fi

clean:
	find . -name \*.gcno -o -name \*.gcda | xargs rm -f
	find . -name \*.lo -o -name \*.o | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f
	find . -name \*.so | xargs rm -f
	find . -name .libs -a -type d|xargs rm -rf
	rm -f libphp$(PHP_MAJOR_VERSION).la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*

distclean: clean
	rm -f Makefile config.cache config.log config.status Makefile.objects Makefile.fragments libtool main/php_config.h main/internal_functions_cli.c main/internal_functions.c Zend/zend_dtrace_gen.h Zend/zend_dtrace_gen.h.bak Zend/zend_config.h
	rm -f main/build-defs.h scripts/phpize
	rm -f ext/date/lib/timelib_config.h ext/mbstring/libmbfl/config.h ext/oci8/oci8_dtrace_gen.h ext/oci8/oci8_dtrace_gen.h.bak
	rm -f scripts/man1/phpize.1 scripts/php-config scripts/man1/php-config.1 sapi/cli/php.1 sapi/cgi/php-cgi.1 sapi/phpdbg/phpdbg.1 ext/phar/phar.1 ext/phar/phar.phar.1
	rm -f sapi/fpm/php-fpm.conf sapi/fpm/init.d.php-fpm sapi/fpm/php-fpm.service sapi/fpm/php-fpm.8 sapi/fpm/status.html
	rm -f ext/iconv/php_have_bsd_iconv.h ext/iconv/php_have_glibc_iconv.h ext/iconv/php_have_ibm_iconv.h ext/iconv/php_have_iconv.h ext/iconv/php_have_libiconv.h ext/iconv/php_iconv_aliased_libiconv.h ext/iconv/php_iconv_supports_errno.h ext/iconv/php_php_iconv_h_path.h ext/iconv/php_php_iconv_impl.h
	rm -f ext/phar/phar.phar ext/phar/phar.php
	if test "$(srcdir)" != "$(builddir)"; then \
	  rm -f ext/phar/phar/phar.inc; \
	fi
	$(EGREP) define'.*include/php' $(top_srcdir)/configure | $(SED) 's/.*>//'|xargs rm -f

prof-gen:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-generate all

prof-clean:
	find . -name \*.lo -o -name \*.o | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f
	find . -name \*.so | xargs rm -f
	rm -f libphp$(PHP_MAJOR_VERSION).la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*

prof-use:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-use all


.PHONY: all clean install distclean test prof-gen prof-clean prof-use
.NOEXPORT:
install: $(all_targets) $(install_targets) show-install-instructions

show-install-instructions:
	@echo
	@$(top_srcdir)/build/shtool echo -n -e %B
	@echo   "  +----------------------------------------------------------------------+"
	@echo   "  |                                                                      |"
	@echo   "  |   INSTALLATION INSTRUCTIONS                                          |"
	@echo   "  |   =========================                                          |"
	@echo   "  |                                                                      |"
	@echo   "  |   See https://xdebug.org/install.php#configure-php for instructions  |"
	@echo   "  |   on how to enable Xdebug for PHP.                                   |"
	@echo   "  |                                                                      |"
	@echo   "  |   Documentation is available online as well:                         |"
	@echo   "  |   - A list of all settings:  https://xdebug.org/docs-settings.php    |"
	@echo   "  |   - A list of all functions: https://xdebug.org/docs-functions.php   |"
	@echo   "  |   - Profiling instructions:  https://xdebug.org/docs-profiling2.php  |"
	@echo   "  |   - Remote debugging:        https://xdebug.org/docs-debugger.php    |"
	@echo   "  |                                                                      |"
	@echo   "  |                                                                      |"
	@echo   "  |   NOTE: Please disregard the message                                 |"
	@echo   "  |       You should add \"extension=xdebug.so\" to php.ini                |"
	@echo   "  |   that is emitted by the PECL installer. This does not work for      |"
	@echo   "  |   Xdebug.                                                            |"
	@echo   "  |                                                                      |"
	@echo   "  +----------------------------------------------------------------------+"
	@$(top_srcdir)/build/shtool echo -n -e %b
	@echo
	@echo

findphp:
	@echo $(PHP_EXECUTABLE)

clean-tests:
	rm -f tests/*.diff tests/*.exp tests/*.log tests/*.out tests/*.php tests/*.sh tests/*.mem

test:
	@echo "Xdebug can not be tested with 'make test', please refer to:"
	@echo "    https://github.com/xdebug/xdebug#testing"
	@echo

test-coverage:
	$(MAKE) clean
	CCACHE_DISABLE=1 EXTRA_CFLAGS=--coverage $(MAKE) all
	TEST_PHP_ARGS="-n -d zend_extension=$(top_srcdir)/.libs/xdebug.so" php run-xdebug-tests.php

test-coverage-lcov: test-coverage
	lcov -c --directory . --output-file $(top_srcdir)/.coverage.lcov

test-coverage-html: test-coverage-lcov
	genhtml $(top_srcdir)/.coverage.lcov --output-directory=/tmp/html
xdebug.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/xdebug.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/xdebug.c -o xdebug.lo 
src/base/base.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/base/base.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/base/base.c -o src/base/base.lo 
src/base/filter.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/base/filter.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/base/filter.c -o src/base/filter.lo 
src/lib/usefulstuff.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/usefulstuff.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/usefulstuff.c -o src/lib/usefulstuff.lo 
src/lib/compat.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/compat.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/compat.c -o src/lib/compat.lo 
src/lib/crc32.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/crc32.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/crc32.c -o src/lib/crc32.lo 
src/lib/file.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/file.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/file.c -o src/lib/file.lo 
src/lib/hash.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/hash.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/hash.c -o src/lib/hash.lo 
src/lib/headers.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/headers.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/headers.c -o src/lib/headers.lo 
src/lib/lib.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/lib.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/lib.c -o src/lib/lib.lo 
src/lib/llist.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/llist.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/llist.c -o src/lib/llist.lo 
src/lib/log.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/log.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/log.c -o src/lib/log.lo 
src/lib/set.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/set.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/set.c -o src/lib/set.lo 
src/lib/str.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/str.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/str.c -o src/lib/str.lo 
src/lib/timing.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/timing.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/timing.c -o src/lib/timing.lo 
src/lib/var.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var.c -o src/lib/var.lo 
src/lib/var_export_html.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_html.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_html.c -o src/lib/var_export_html.lo 
src/lib/var_export_line.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_line.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_line.c -o src/lib/var_export_line.lo 
src/lib/var_export_text.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_text.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_text.c -o src/lib/var_export_text.lo 
src/lib/var_export_xml.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_xml.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/var_export_xml.c -o src/lib/var_export_xml.lo 
src/lib/xml.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/xml.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/lib/xml.c -o src/lib/xml.lo 
src/coverage/branch_info.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/coverage/branch_info.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/coverage/branch_info.c -o src/coverage/branch_info.lo 
src/coverage/code_coverage.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/coverage/code_coverage.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/coverage/code_coverage.c -o src/coverage/code_coverage.lo 
src/debugger/com.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/com.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/com.c -o src/debugger/com.lo 
src/debugger/debugger.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/debugger.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/debugger.c -o src/debugger/debugger.lo 
src/debugger/handler_dbgp.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/handler_dbgp.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/handler_dbgp.c -o src/debugger/handler_dbgp.lo 
src/debugger/handlers.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/handlers.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/debugger/handlers.c -o src/debugger/handlers.lo 
src/develop/develop.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/develop.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/develop.c -o src/develop/develop.lo 
src/develop/monitor.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/monitor.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/monitor.c -o src/develop/monitor.lo 
src/develop/php_functions.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/php_functions.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/php_functions.c -o src/develop/php_functions.lo 
src/develop/stack.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/stack.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/stack.c -o src/develop/stack.lo 
src/develop/superglobals.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/superglobals.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/develop/superglobals.c -o src/develop/superglobals.lo 
src/gcstats/gc_stats.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/gcstats/gc_stats.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/gcstats/gc_stats.c -o src/gcstats/gc_stats.lo 
src/profiler/profiler.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/profiler/profiler.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/profiler/profiler.c -o src/profiler/profiler.lo 
src/tracing/trace_computerized.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/trace_computerized.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/trace_computerized.c -o src/tracing/trace_computerized.lo 
src/tracing/trace_html.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/trace_html.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/trace_html.c -o src/tracing/trace_html.lo 
src/tracing/trace_textual.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/trace_textual.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/trace_textual.c -o src/tracing/trace_textual.lo 
src/tracing/tracing.lo: /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/tracing.c
	$(LIBTOOL) --mode=compile $(CC)   -I. -I/home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3 $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/w/wmdev/fur.wm-dev.ru/public_html/cgi-bin/xdebug-3.1.3/src/tracing/tracing.c -o src/tracing/tracing.lo 
$(phplibdir)/xdebug.la: ./xdebug.la
	$(LIBTOOL) --mode=install cp ./xdebug.la $(phplibdir)

./xdebug.la: $(shared_objects_xdebug) $(XDEBUG_SHARED_DEPENDENCIES)
	$(LIBTOOL) --mode=link $(CC) $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS)  -o $@ -export-dynamic -avoid-version -prefer-pic -module -rpath $(phplibdir) $(EXTRA_LDFLAGS) $(shared_objects_xdebug) $(XDEBUG_SHARED_LIBADD)

