# The Design of a Database-Driven Web Application for NCEA Level 3

Project Name: **Secure Notes**

Project Author: **Tom Meldrum**

Assessment Standards: **91902** and **91903**


-------------------------------------------------

## System Requirements

### Identified Need or Problem

Notes are not secure enough. Anyone with access to your phone can see all your private notes. 

### End-User Requirements

My mum (Andrea) is the end user. She deals with blind clients and takes lots of notes on a work phone. But it tends to be quite sensitive information, and all work phones have the same password across all spheres of the organisation, even those in different fields to her. The simple notes app on these phones is the most convenient for client notes, but is super insecure. Even just a single custom password as a wall between the phone and the notes would be a huge win. Her clients deserve their confidential information to remain secure. But while she will be the end user feedback wise, the system must also function as a secure notes app used by anyone. To achieve that, I will base my design similarly to other notes apps, while including the features stated by the end user. This will not only solve the end user identified need/problem, but also create a useful and secure notes app for any users to utilise. 

### Proposed Solution

Three words: master password protection. It needs to be super secure, no password recovery, erases all data after 10 failed attempts. Shows the failed attempt count. Must be simple and aesthetic. 

First opened, prompted for Master Password or account creation. The account creation consists of a username and master password of choice. Notes are stored under corresponding users. Master Password starting page much like Bitwarden, no access to anything notes-wise until the password is input. Notes are organised into folders and can add and delete notes, notes must also be able to be modified. It's also just as important for the notes app to remain as simple ass possible. Its made for quick notes, so it must be efficient to use and have as little on the UI as possible, whilst remaining at full functionality. 

- Account Creation: There won't be account creation in the traditional sense, instead, there will be a password input screen where you initially choose a password, then whenever returning, must have it input to access the notes. 

- Notes Viewing: There will deliberately not be folders as it isn't very relevant to the end user. Unless they say they want them I won't bother adding them. Its not super difficult or anything, so I don't feel like it makes my site anymore impressive, just one more roadblock and page to geth through that I just don't see being useful. 

- Screen orientation: I am designing this app for a phone screen. This means I wont have lots of stuff like menus on the screen, and have everything accessed through one click. Login to note display to note open to note add all on different pages but all within a single click. 


-------------------------------------------------

## Relevant Implications

### Usability

Usability is a simple yet crucial part of a site/app. This defines how simple it is for the user to traverse the site. 

This app is made for quick notes, so it is crucial it is simple and quick to just get the words down. The entire point of this notes app is something that closely resembles the regular notes app, just with an added feature of security. Building around the user will give them the closest match to what they've been previously used to.

Keep features easy to access. Everything should be accessible from the home page. They should come as naturally as possible. They must work, and they must work how you would expect. 


### Flexibility and Efficiency of Use

How the website can be used in numerous ways to create the most efficient experience. 

The notes must be able to be accessed from anywhere, and must be able to create a new note from anywhere. I must be able to balance security and ease of use. 

Everything must link back to the home page, and never be in too deep to any one function. Backing out must be as easy as going in. The interface must also be as open plan as possible. 

### Aesthetic and Minimalist Design

A good looking and uncomplicated UI. 

It is crucial this app contains the least amount of headaches as possible. If this app is to be effective, it needs to be so usable that the end user wants to use it.   

The design will be simple and clean. It will have as little unnecessary features as possible, while maintaining a functioning and minimalist design. This will ensure the site is wanted to be used over the competition (regular notes app). Alongside my security feature, as long as my site is minimalist enough to fit its simple purpose, it will be desirable to the end user.

### Privacy

How user data and security is protected.

Half the point of my app is security, so privacy is a largely important heuristic that I must follow. User data stored inside my app will have to have a guarantee of protection, otherwise my promise of a 'secure notes' app will be wrong, rendering my app pointless. 

I will make sure there are no loopholes with the login section, and no easy way to breach the login either. I will try to break it in as many ways as I can to ensure that the promise of security is genuine. Then I can accurately class my app as 'secure'. 


-------------------------------------------------

## Relevant User Experience (UX) Principles

### User-centricity

User-centricity means building the site around the user. Think like a user when designing etc.

The entire point of this notes app is something that closely resembles the regular notes app, just with an added feature of security. Building around the user will give them the closest match to what they've been previously used to.

I will take inspiration from the native notes app, and build around using the heuristics it follows to ensure a user central interface. 



### Consistency

Keeping the design consistent across all pages and actions. Both in look and function. 

Because simplicity is key for my project consistency is important. As notes apps are very formularised already, this app will need to meet that expectation and remain consistent throughout. 

I will keep consistent to the general look and function of a notes app, so it is expected by the user. But I will also keep the look consistent with colours and layout. That way, the user subconsciously knows how to traverse the site without needing to put much thought into it.  


### Findable

Systems are easy to navigate so the users are able to access and find the content they need.

My notes app is based on the business model of fast and easy phone access. That means that each section should be where you would commonly expect it to be. 

This should be contingent on other notes apps so the layout is previously familiar to a degree. I will also have clearly laid out pages with large headings at the top to show exactly where the user is on the app. 


-------------------------------------------------
-------------------------------------------------

## Final System Design
![alt text](<images/Notes App Layout.png>)
### Database Structure

Place a image here that shows the *final design* of your database: tables, fields and relationships.

### User Interface Design
![alt text](<images/Database.png>)
Place images here that show your *final design* of your UI: layout, colours, etc.


-------------------------------------------------

## Completed System

### Database Structure

Place a image here that shows the *actual database structure* that you implemented: tables, fields and relationships.

### User Interface Design

Place screenshots and notes here that show your *actual system UI* in action.

![Alt text](<images/1st Figma.png>)
-------------------------------------------------

## Review and Evaluation

### Meeting the Needs of the Users

Replace this text with a brief evaluation of how well you met the needs of your users. Look at what you initially wrote about who they are, what specific needs they have, etc. and discuss how well the system meets those needs.

### Meeting the System Requirements

Replace this text with a brief evaluation of how well you met the requirements that you defined at the start of the project, etc. Look back at the list of features / functionality you initially set and discuss how well your system has implemented each one.

### Review of IMPLICATION NAME HERE

Replace this text with brief notes showing how the implication was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of IMPLICATION NAME HERE

Replace this text with brief notes showing how the implication was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of IMPLICATION NAME HERE

Replace this text with brief notes showing how the implication was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of UX PRINCIPLE NAME HERE

Replace this text with brief notes showing how the UX principle was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of UX PRINCIPLE NAME HERE

Replace this text with brief notes showing how the UX principle was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

### Review of UX PRINCIPLE NAME HERE

Replace this text with brief notes showing how the UX principle was addressed in the final outcome. Accompany the notes with screenshots / other media to illustrate specific features.

