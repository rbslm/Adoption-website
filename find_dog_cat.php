<?php
$dogcat = $_POST['dogcat'];
$breedChoice = $_POST['breed'];

if($breedChoice == "breed"){
    $breed = $_POST['breedtxt'];
}
else if($breedChoice == "Does not matter"){
    $breed = null;
}
$preferredage = $_POST['preferredage'];
$gender = $_POST['gender'];
$getAlong = $_POST['yesno'];

// Dogs
if($dogcat == "Dog"){
    if($breed == "Labrador"){
        if($preferredage == "option3" || $preferredage == "option4"){
            if($gender == "Female" || $gender == "Does not matter"){
                // maika
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                echo "<script>document.getElementById('cooper').style.visibility  = 'hidden';</script>";
                echo "<script>document.getElementById('lola').style.visibility  = 'hidden';</script>";
            }
            else {
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else{
            // remove all available pets
            include("browseAvailablePets.php");
            echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
        }
    }
    else if($breed == "Pomeranian"){
        if($preferredage == "option2"){
            if($gender == "Male" || $gender == "Does not matter"){
                if($getAlong == "No"){
                    // cooper
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('lola').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('maika').style.visibility  = 'hidden';</script>";
                }
                else{
                    // remove all available pets
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
                }
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else{
           // remove all available pets
           include("browseAvailablePets.php");
           echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
        }
    }
    else if($breed == "Poodle"){
        if($preferredage == "option1"){
            if($gender == "Female" || $gender == "Does not matter"){
                //lola
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                echo "<script>document.getElementById('maika').style.visibility  = 'hidden';</script>";
                echo "<script>document.getElementById('cooper').style.visibility  = 'hidden';</script>";
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else{
            // remove all available pets
            include("browseAvailablePets.php");
            echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
        }
    }
    else if($breed == null){
        if($preferredage == "option1"){
            if($gender == "Female" || $gender == "Does not matter"){
                //lola
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                echo "<script>document.getElementById('maika').style.visibility  = 'hidden';</script>";
                echo "<script>document.getElementById('cooper').style.visibility  = 'hidden';</script>";
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else if($preferredage == "option2"){
            if($gender == "Male" || $gender == "Does not matter"){
                if($getAlong == "No"){
                    // cooper
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('maika').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('lola').style.visibility  = 'hidden';</script>";
                }
                else{
                    // remove all available pets
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
                }
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else if($preferredage == "option3"){
            if($gender == "Female" || $gender == "Does not matter"){
                //maika
                include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('cooper').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('lola').style.visibility  = 'hidden';</script>";
            }
            else {
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else {
            if($gender == "Male"){
                if($getAlong == "Yes"){
                    // remove all available pets
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
                }
                else{
                    // cooper
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('maika').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('lola').style.visibility  = 'hidden';</script>";
                }
            }
            else if($gender == "Female"){
                //maika and lola
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                echo "<script>document.getElementById('cooper').style.visibility  = 'hidden';</script>";
            }
            else{
                if($getAlong == "Yes"){
                    // maika and lola
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('cooper').style.visibility  = 'hidden';</script>";
                }
                else{
                    // lola and maika and cooper
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets4to6').style.visibility  = 'hidden';</script>";
                }
            }
        }
    }
}

// Cats
else if($dogcat == "Cat"){
    if($breed == "Persian"){
        if($preferredage == "option3" || $preferredage == "option4"){
            if($gender == "Male" || $gender == "Does not matter"){
                if($getAlong == "No") {
                    //oscar
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('angela').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('felix').style.visibility  = 'hidden';</script>";
                }
                else{
                   // remove all available pets
                   include("browseAvailablePets.php");
                   echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
                }
            }
            else{
               // remove all available pets
               include("browseAvailablePets.php");
               echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else{
            // remove all available pets
            include("browseAvailablePets.php");
            echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
        }
    }
    else if($breed == "Siamese"){
        if($preferredage == "option1"){
            if($gender == "Female" || $gender == "Does not matter"){
                // angela
                include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('oscar').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('felix').style.visibility  = 'hidden';</script>";
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else{
            // remove all available pets
            include("browseAvailablePets.php");
            echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
        }
    }
    else if($breed == "Abyssinian"){
        if($preferredage == "option2"){
            if($gender == "Male" || $gender == "Does not matter"){
                // felix
                include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('angela').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('oscar').style.visibility  = 'hidden';</script>";
            }
            else{
            // remove all available pets
            include("browseAvailablePets.php");
            echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else{
            // remove all available pets
            include("browseAvailablePets.php");
            echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
        }
    }
    else if($breed == null){
        if($preferredage == "option1"){
            if($gender == "Female" || $gender == "Does not matter"){
                //angela
                include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('oscar').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('felix').style.visibility  = 'hidden';</script>";
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else if($preferredage == "option2"){
            if($gender == "Male" || $gender == "Does not matter"){
                // felix
                include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('angela').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('oscar').style.visibility  = 'hidden';</script>";
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else if($preferredage == "option3"){
            if($gender == "Male" || $gender == "Does not matter"){
                if($getAlong == "No"){
                    //oscar
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('angela').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('felix').style.visibility  = 'hidden';</script>";
                }
                else{
                    // remove all available pets
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
                }
            }
            else{
                // remove all available pets
                include("browseAvailablePets.php");
                echo "<script>document.getElementById('availablePets').innerHTML = '<p>No available pet matches description.</p>';</script>";
            }
        }
        else if($preferredage == "option4"){
            if($gender == "Male"){
                if($getAlong == "Yes"){
                    // felix
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('angela').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('oscar').style.visibility  = 'hidden';</script>";
                }
                else{
                    // felix and oscar
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('angela').style.visibility  = 'hidden';</script>";
                }
            }
            else if($gender == "Female"){
                // angela
                include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('oscar').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('felix').style.visibility  = 'hidden';</script>";
            }
            else{
                if($getAlong == "Yes"){
                    // felix and angela
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                    echo "<script>document.getElementById('oscar').style.visibility  = 'hidden';</script>";
                }
                else{
                    //felix and angela and oscar
                    include("browseAvailablePets.php");
                    echo "<script>document.getElementById('availablePets1to3').style.visibility  = 'hidden';</script>";
                }
            }
        }
    }
}
?>