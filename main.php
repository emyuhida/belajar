<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Javascript</title>
</head>

<body>
    <script>
        //Destructuring Object
        const profile = {
            firstName: "Yusuf",
            lastName: "Hidayat",
            age: 18
        }
        const {
            firstName,
            lastName,
            age,
            isMale = false
        } = profile;
        console.log(firstName, lastName, age, isMale);

        //Destructuring assignment
        const profilAss = {
            firstNameAss: "mohammad",
            lastNameAss: "yusuf",
            ageAss: 19
        }

        let firstNameAss; // percobaan jika tidak di inisiasi
        let ageAss = 40; //percobaan jika diinisiasi
        ({
            firstNameAss,
            ageAss
        } = profilAss);

        console.log(firstNameAss, ageAss);
    </script>
    <!-- <script src="main.js"></script> -->
</body>

</html>