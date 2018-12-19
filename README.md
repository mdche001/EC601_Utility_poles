# Utility_Pole_Project
Talon Company Project

To build a website to display the result of utility poles’ detection and their 3D model. Making it easier for companies to consult utility poles’ in certain region.

## Model diagram

The diagram of raw detection is as follows

![image](https://github.com/mdche001/EC601_Utility_poles/blob/master/docu%20images/CNNnet.png) 

The classification of attachments on poles is yolo

![image](https://github.com/mdche001/EC601_Utility_poles/blob/master/docu%20images/model_architecture.png) 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system. And website for this project is on local which only can be display as images on this page. 

### Prerequisites

Python Version: 3.6.5<br>		
Key needed: Google Maps StreetView Service Key<br>
Tensorflow-gpu<br>
Wampserver64: Apache + Mysql + Wordpress<br>
other necessary libs needed to be import<br>

## Running the google download tests

Put your key into 9th line
Change lattitude and longitude at line 72

### Break down into end to end tests

The aim of getStreetviewImage.py is downloading images as training and testing samples based on input location information.<br>
This code will grab nearby streetview images and record camera parameter into a json file.<br>

## Running the model

### Main doc is Train.py
If the train foder, which can be found in data foder, have enough pictures, just run the Train.py.  
### Raw Detection  
Tensorflow-1.9  
AlexNet  
### BoundingBox  
Darkflow

### tesnor board

Ths accuracy analyze is

![image](https://github.com/mdche001/EC601_Utility_poles/blob/master/docu%20images/accuracy.PNG) 

The loss is

![image](https://github.com/mdche001/EC601_Utility_poles/blob/master/docu%20images/loss.PNG) 

## 3D Model
Based on the gray color and dark gradient, detect the wire numbers and locations on the pole. Combine these information and got a 3d model of the pole by pygame.

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

### Website interface

The index

![image](https://github.com/mdche001/EC601_Utility_poles/blob/master/docu%20images/FireShot%20Capture%201%20-%20Utility%20Pole%20–%20Ec601%20project%20-%20http___localhost_wordpress_.png) 

Ths google map page with poles' marker

![image](https://github.com/mdche001/EC601_Utility_poles/blob/master/docu%20images/FireShot%20Capture%203%20-%20Simple%20Map%20-%20http___localhost_wordpress_123-2_.png) 

The result of raw detection and 3d model

![image](https://github.com/mdche001/EC601_Utility_poles/blob/master/docu%20images/FireShot%20Capture%204%20-%20%20-%20http___localhost_wordpress_validate.png) 

## Authors

* **Frank Li** - *3D work* - [PurpleBooth](https://github.com/FrankLiOnLine)
* **Jing Li** - *Training work*
* **Mingdao Che** - *Website work*
