Project of online store exemple with Kube framework
===================================================

Architecture
------------

### Frontend
The frontend framework is Kube from imperavi, this framework give us the architecture for the project and let us personalize the scss to make it applicant to our need

### Backend
The backend APi is under Yii 2 framework, on advanced project. See the repo [here](https://github.com/Yonninout/boutique_api)

Dev
--------
## Install
to install sass binarie run 
```bash
sudo apt install ruby-sass
```

## compile
to compile i use this script lines to keep my kube.css file up to date after each modification on .scss files

```bash
#!/bin/bash
sass --watch /var/www/html/teepote/src/sass/kube.scss:/var/www/html/teepote/dist/css/kube.css &
```
