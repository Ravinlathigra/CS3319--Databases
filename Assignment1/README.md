# Assignment 1

Masters Course Work

### Part 1:

Draw the complete Entity Relation Diagram for the following scenario:

Consider the following set of requirements for a database that is used to keep track of graduate students and their professors

+ Professors have an SSN, a first name, a last name, an email address and a birthdate
+ Projects have a unique project number, a project description, a starting date, an ending date and a budget
+ Graduate students have a student number , a first name, a last name, a birthdate, an email address and a graduate degree type (MSc or PhD)
+ Departments have a unique department number, a unique department name, a main office number and a building code for the building they are located in
+ Each project is lead by one professor
+ Each project has one or more professors working on it
+ Professors can lead/work on many projects or no projects
+ Each project is worked on by one or more grad students, a grad student works on either 0 or 1 projects.
+ Professors supervise grad students. A grad student will have one or more supervisors.  A professor might not supervise any grad students
+ Each department has a professors who chairs the department.  A professor would only be chair of one dpeartment but each professors works in one or more departments. You need to keep track of the amount of time they have worked for each department.
+ Every grad student majors in one department and might minor in  one other department. Every department has at least three grad students who major in it and at least two students who minors in it.
+ A grad student could  have an older more experienced senior grad student who acts as a mentor for that student. Some senior grad students wouldn't have mentors.  A grad student could mentor many grad students.

If I have not explicitly stated something, then there is an obvious choice. Do not add any extra relationships that you assume should exist, just include the ones mentioned above.

Show both the cardinality of the relationships (the 1:M notation on the lines) and the participation (include both the (min, max) constraints AND the double line/single line notation). Do NOT include any extra information than is given above to illustrate the above database. For each entity, underline the key you would pick to be the primary key (if it is a composite key indicate that next to the entity), if there is more than 1 candidate key, underline all the candidate keys (use a squiggly line (or indicate somehow, colour change, anything) for candidate keys but a straight line for the one you would choose to be the primary key). You will be marked on choosing the best solution, some solutions may work but not be the best! Do not use the Crows Foot Notation.

Use MS Visio, draw.io or some other software that create E-R diagrams to create your E-R Diagram. 

### Part 2:

Map Your Entity Relation Diagram to a Relational Database on paper, showing all tables, column heading, keys (primary and foreign, indicate if the key is primary with an underline and/or foreign with a star). You may use MS Word to draw the tables, or Access and then take screenshots or you may hand draw the tables and take a picture of the tables BUT IF YOU HAND DRAW YOU MUST BE NEAT!

### Part 3:

Write down the answers to the following 10 questions at the top of a sheet and insert each of your answers into the tree IN THE ORDER YOU ANSWER THE QUESTIONS AS SHOWN BELOW.  You must go to left for <= in the tree and to the right for > .  Use the first letter(s) of each word  to decide where in the tree they should go and ignore the case.  Start with an an initially empty B+-tree with 2 keys and 3 pointers per node. The first step should show you entering your answer to question 1, then step 2 should show you inserting the word that is the answer to question 2, etc...You must show the tree with the actual word(s) in it at each step, NOT a numerical representation of the words. Show the tree after the insertion of each item. Remember to show ALL pointers.

1. What is your first name?
2. What is your favourite fruit?
3. What is your favourite animal?
4. What is the name of your favourite TV show?
5. What is the last name of your favourite actor?
6. What is the name of a city you would love to visit someday?
7. What is the name of the month in which you were born?
8. What is the name of the country in which you were born?
9. What is the last name of some famous person you would like to meet?
10. What is your last name?
