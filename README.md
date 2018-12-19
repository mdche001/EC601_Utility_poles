# Utility_Pole_Project
Talon Company Project

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system. And website for this project is on local which only can be display as images on this page. 

### Prerequisites

Python Version: 3.6.5<br>		
Key needed: Google Maps StreetView Service Key
Tensorflow-gpu
Wampserver64: Apache + Mysql + Wordpress
other necessary libs needed to be import

## Running the model

### Main doc is Train.py
If the train foder, which can be found in data foder, have enough pictures, just run the Train.py.  
### Raw Detection  
Tensorflow-1.9  
AlexNet  
### BoundingBox  
Darkflow

## Running the google download tests

Put your key into 9th line
Change lattitude and longitude at line 72

### Break down into end to end tests

The aim of getStreetviewImage.py is downloading images as training and testing samples based on input location information.<br>
This code will grab nearby streetview images and record camera parameter into a json file.

## Utility_website

The webiste is based on Wrampper+wordpress+press, the all documents and files is stored in my local host. The address of the website is http://localhost/wordpress/ which are not available for the external customers, because I did not find a good way to upload my website. Maybe github.io is suitable for our website, I will work on it in near future. 

### website description

Main function of this website is:<br>
Customers Account function: Sin up, Log in, Registrition, Find passwords(finished).<br>
google map call(finished).<br>
Download Google street images when customers clike on the map:(Not yet)<br>
1. A python script download images via geolocation.(finished)<br>
2. Monitor section(Not yet).<br>
 
Note:<br>
Theme is provided by di_business in Wordpress<br>

## Authors

* **Frank Li** - *Initial work* - [PurpleBooth](https://github.com/FrankLiOnLine)
* **Jing Li** - *Initial work*
* **Mingdao Che** - *Initial work*
