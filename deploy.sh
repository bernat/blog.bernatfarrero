#!/bin/sh

if [ "$1" = "all" ]
then 
	scp -r * dberni@bernatfarrero.com:bernat/blog/wp-content/themes/bernatfarrero/
else 
	if [ "$1" = "img" ] 
	then 
		scp images/* dberni@bernatfarrero.com:bernat/blog/wp-content/themes/bernatfarrero/images/
	else
		if [ "$1" = "style" ]
		then
			scp *.css dberni@bernatfarrero.com:bernat/blog/wp-content/themes/bernatfarrero/stylesheets/
		else 
			scp *.php dberni@bernatfarrero.com:bernat/blog/wp-content/themes/bernatfarrero/
		fi
	fi
fi
