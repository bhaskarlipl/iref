#!/bin/bash
echo "Deploy Blog Server"
echo "Enter directory path for blog"
$dir = read();
cp -r blog/ $dir;
