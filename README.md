### BILL TRACKER
This is a simple website. 9 April 2018
By LAWRENCE KARANJA, GRACE MARION, WENDY MARY, DAVID LUTTA

### Description
Bill Tracker is a simple website used to keep track of all available law bills that have been proposed in Kenyan parliament since 2015. The system uses cards to display snapshots of information about a bill while also providing a way to view all the information about a bill. It also provides a search functionality that allows the user to search for a particular bill or a particular lawmaker to see how many bills they have proposed.

### Setup/Installation Requirements
* The application uses `XAMPP` as the PHP and MySQL server(`REQUIRED`). You can get it [HERE](https://www.apachefriends.org/download.html).
* The application uses custom fonts(`OPTIONAL`).
* The application also uses JQuery and Bootstrap.(`REQUIRED`)
* If you need to use your own custom styles you can define them within the css/styles.css file(`OPTIONAL`).
When all the Requirements have been met, you can simply clone the application by running the command
`git clone https://github.com/lawrence254/BillTrack.git` on your local machine and you can run your own version. You can also access the website from this (https://lawrence254.github.io/BillTrack/) or the one provided above if you first want to see how the application works.

## Specifications
The following are the specifications for this application:

### INPUT
This section describes the various inputs that are possible within this application.
#### UPLOAD OF BILL
The application only allows authorized persons to upload a bill via a given portal.
The portal takes the following inputs:
#### A File in PDF, DOCX or DOC Format. (FILE)
* Any other format will generate an error upon submission.

#### Title of A Bill. (TEXT)
* This is the title of the bill.

#### Description. (LONG TEXT)
* This text that describes what the bill is about.

#### Proposer. (TEXT)
* The name of the bill proposer.

#### Proposed Date. (DATE)
* This is  the day that the bill was proposed.

#### Maturity Date. (DATE)
* Date when the bill is signed as law.

#### SEARCH
The application provides a search functionality that accepts text input from the user and searches for it  in the database.



### Built Using
* HTML5
* CSS3
* Bootstrap
* JavaScript
* JQuery
* MySQL
* PHP
* Google Fonts

## Known Bugs/Updates/Corrections
The application currently doesn't have any bugs. If any are spotted you can open an issue by clicking on this [link](https://github.com/lawrence254/BillTrack/issues) and selecting `New Issue` on the resulting page and we will look into it.

## Future Functionality To Be Added
1. Provide all bill details in a simple manner that all can understand.
2. Provide actual real time tracking of the bill as it moves through the various stages.
3. Provide statistics about the members of parliament activity during parliamentary sessions of a bill.
4. Provide statistics on how a bill will affect the constituents.
5. Provide a functionality to allow rating of effect of bill on the national,county and constituency level.
6. Allow users to only view bills that will affect their constituency or bills that affect the whole country.
   * Allow users to register to only one constituency.
7. Financial Impact of bills.
   * How to track impact of bill on the budget and on the tax obligations of the citizens.
   * statistics of the involvement of an MP on a bill Versus the amount of money they are paid as sitting allowance.
8. Track how fast critical bills take to mature compared to other bills.

## Contact details
You can contact us at
1. lawrenslava1[at]gmail[dot]com
2. gracekashe[at]gmail[dot]com
3. davidlutta2010[at]gmail[dot]com
4. marywendy74[at]gmail[dot]com


## License
[License](https://github.com/lawrence254/BillTrack/blob/master/LICENSE)

License MIT Copyright (c) 2018
1. LAWRENCE KARANJA
2. DAVID LUTTA
3. WENDY MARY
4. GRACE MARION
