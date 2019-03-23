# VHMaVi Webstive V3

<http://vhmavi.edu.np/>

## Introduction

This project was initially realised on January and Febrary 2019 by Thibaud Malbert, a volunteer from the school. It is designed for the nepalese school Victor Hugo Manjushree Vidyapith, in Chapali - Budhanilkanta municipality - Katmandou.

This *README.md* gives a basic review about the architecture and the production environment.

You can also find :

* An architecture visualization to understand the interaction between the different files : <https://drive.google.com/file/d/1Oqi_PvWfbIbDZ9WIB6cv7WNZ4T9NnITS/view?usp=sharing>.
* A starter kit to handle this project : <https://docs.google.com/document/d/1pRX6MQbFdC3-9dmt903THP4kVtQ2m_InIwDYSGdBSkY/edit?usp=sharing>.
* A full documentation introducing each used technology and going through each file : <https://docs.google.com/document/d/1n7EXtI2URRkHR4kFWB9Gl_5c6lgDdszu3PRHfozmpjg/edit?usp=sharing>.

## Tree view

### *bootstrap*

This folder contains all the components of Bootstrap framework. This framework provides performant style and animations in order to reach faster a beautiful result. It also provides a responsive grid.

In this folder, you will find :

* Bootstrap CSS resources in *css* folder. *bootstrap.css* is used for development, providing complete code. *bootstrap.min.css* is used in production environment : code is minified so it is loaded faster.
* Bootstrap and JQuery JavaScript resources in *js* folder. Bootstrap uses JQuery so both are needed. Same as for CSS code, the full code for development is in *bootstrap.js* and *jquery.js* and the minified code in *bootstrap.min.js* and *jquery.min.js*.

### *components*

This folder contains all the components used by one or several pages. This architecture add a modularity layer. A component can easily be moved to another page, can easily be updated, replaced or removed.

* *donation-sponsor* : components specific to the page *donation-sponsor.php*. Its form and the sponsoring option component that is include in the form.
* *index* : components specific to the page *index.php*. The picture carousel, a description and a data presentation.
* *news* : components specific to the page *news.php*. Its form and the past newsletter list.
* *team* : components specific to the page *team.php*. The direction presentation and the team list.
* *vhmavi-accordion* : a custom accordion component. It is used in different components.
* *vhmavi-file-input* : a custom file input component. It is used in the volunteer application form.
* *vhmavi-footer* : the web page footer component. It is included in each page.
* *vhmavi-form* : a custom form component. It is used in different component and web pages.
* *vhmavi-full-width-img* : a container for image that occupies the full width of the screen. It is used in different web pages.
* *vhmavi-header* : the web page header component, containing the school name and logo and the menu. It is included in each page.
* *vhmavi-phone-input* : a custom phone input component that provides a basic validation function for phone numbers. It is used in the *donation-sponsor-form* component.
* *vhmavi-postal-code-input* : a custom postal code input component that provides a basic validation function for postal codes. It is used in the *donation-sponsor-form* component.
* *vhmavi-txt-img-shared-row* : a container for rows shared between text and image. The image occupies all the free space, without any margin. It is used in different web pages.
* *volunteer* : component specific to the page *volunteer.php*. It is its form.

### *css*

This folder contains all the CSS resources.

* *styles.css* are the common styles, shared by all the pages.
* Each page has is own specific styles. For example, *index.css* are the specific styles to the *index.php* page (home page).
* There is also a stylesheet *vhmavi-icon.css* that provides a font containing a set of icons.

### *extern*

This folder contains the different external resources. It is the different newsletters of the school.

### *icon*

This folder contains the related icon files. It contains the 4 font files used by the font defined in *css/vhmavi-icon.css*.

It also contains the origin icon files in the *icon/origin* folder. These files are used to generate the icon font thanks to <https://icomoon.io/app>. They are not needed in production environment.

### *img*

This folder contains all the media used by the website.

In this folder, you will find a folder for each page containing its own media.

### *includes*

This folder contains common HTML content for the page definition.

* *head.php* : This file contains the common content for `<head>` tag in all pages. It contains the common stylesheets (Bootstrap, header, footer and *styles.css*).
* *script-loader.php* : This file loads the common scripts (Bootstrap and JQuery).

These two files need to be changed for production environment in order to include and load the minified CSS and JS files.

### *js*

This folder contains the JavaScript files related to the web pages.

In this folder, you will find a JavaScript file for each page. For example, *contact.js* contains scripts specific to *contact.php* page (home page).

You will also find a JavaScript file that updates the figures related to the school in all pages.

### *services*

This folder contains the different server-side services that are called on asynchronous form submitions.

* *children_sponsor.php* is used for the submition of the donation and sponsoring form defined in the component *donation-sponsor-form*. It sends to the administrator an email containing the different information taken by the user. It sends a confirmation email to the user. It subscribes the user to the newsletter if needed. It uses the module *subscribe_newsletter_mod.php*.
* *send_mail.php* is used for the submition of the contact form defined in the page *contact.php*. It sends to the administrator containing an email the different information taken by the user. It sends a copy of this email to the user if needed.
* *subscribe_newsletter_mod.php* is a module that definie a function for all the newsletter subscription process.
* *subscribe_newsletter.php* is used for the newsletter sbscription from the form defined in the component *news-newsletter-form*.
* *volunteer_application.php* is used for the submition of the volunteer application form defined in the component *volunteer-form*. It sends to the administrator an email containing the different information taken by the user. It sends a confirmation email to the user.

### Root

In the root folder, you will find all the PHP/HTML files for each pages. Those files contains HTML code, combined with some PHP for server-side preprocessing.

## Production

Once the website is ready and need to be pushed for production, please follow the following rules :

* Resize images. Use <https://resizeimage.net/> to resize the new images to the correct size. Images can be 4000 pixels or more wide whereas only a width of 1500 or 900 pixel is enough. Check the size of the displayed image on your browser and resize image to dimensions just above (respecting the ratio !).
* Compress images. Use <https://imageoptim.com/online> to compress the resized images.
* Audit the website on Google Chrome using Lighthouse extension. Every field should be above 90 points. If not, apply the needed correction to have this score.
* Make a copy of the folder in which you will prepare the environment production.
* Remove the *icon/origin* folder.
* Change the includes for including minified CSS and JavaScript files.
* Minify all the CSS files you have edited using <https://cssminifier.com/>.
* Minifiy all the JavaScript files you have edited using <https://javascript-minifier.com/>.
* Remove all the not-minified CSS and JavaScript files.