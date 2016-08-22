#!/bin/bash
#
# This file is part of the phpBB Forum Software package.
#
# @copyright (c) phpBB Limited <https://www.phpbb.com>
# @license GNU General Public License, version 2 (GPL-2.0)
#
set -e
set -x

DB=$1
TRAVIS_PHP_VERSION=$2

if [ "$DB" == "mysqli" -a "$TRAVIS_PHP_VERSION" == "5.5" ]
then
	cd phpBB
	composer require phpbb/epv:dev-master --dev --no-interaction
	cd ../
fi
