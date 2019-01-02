#!/bin/bash
# Prepare plugin release

# Directories
# YELLOWDIR is the absolute path to your Yellow installation
YELLOWDIR="/home/steffen/yellow/"

# PLUGINROOT is the root directory for your development projects, e.g. your GitHub folder
PLUGINROOT="/mnt/e/Steffen/Documents/GitHub/"

# PLUGINDIR is the project directory
PLUGINDIR=${PWD##*/}

# Execute release command
cd $YELLOWDIR
php yellow.php release $PLUGINROOT$PLUGINDIR