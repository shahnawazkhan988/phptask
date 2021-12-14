#!/bin/bash

INPUTFILE=/opt/lampp/htdocs/wireit/readXmlfile2.php
OUTPUTFILE=/opt/lampp/htdocs/wireit/data.csv

if [ -f "$INPUTFILE" ]; then
	echo "input file exists."
else
	echo "input file does not exists"
fi

if [ -f "$OUTPUTFILE" ]; then
	echo "output file exists."
else 
	echo "out put file doesnot exists."
fi