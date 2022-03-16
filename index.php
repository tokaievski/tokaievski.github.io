<?php

require_once('init.php');
// START 1
require_once('process.php');
// END 1
?>

<!DOCTYPE html>
<html lang="fr">
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
       <meta name="keywords" content="Tokyo, lycée français, LFIT, LFJT, lycée français international, international, aefe, WHO'S UGLIER?, lel, professeurs, " />
	<meta name="description" content="A tribute to Zuckerberg." />
	<meta name="title" content="LFI Tokyo (Who's uglier?)">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <title>WHO'S UGLIER?</title>
    </head>
    <body>
        <header>
            <h1>WHO'S UGLIER?</h1>
        </header>
        <p id="first">Were we let in for our looks? No. Will we be judged on them? Yes.</p>
        <p id="second">Who's Uglier? Click to Choose.</p>
        <div id="dual">
            <?php require_once('ajax/ajax.dual.php'); ?>
        </div>
        <footer>A tribute to <a href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTEhMVFRUWGBcXGBcYFRUYGBcWFRUXFhcVGBcYHSggGBolHRUVITEhJSkrLi4vFx8zODMtNygtLisBCgoKDg0OGhAQGi0lHx0tLS0tLS0tLS0tLS0rLS0tLS0tLSstLS0uLS0tLS0wLS0tLTA3LTcrLi4tKy0rLS0tLf/AABEIAPkAygMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAABAgMEBQYHAAj/xABQEAACAQMCAwQGBAgKBwgDAAABAgMABBESIQUTMQZBUWEHFCJxgZEjMkKhM1JydJKxwfAVJDQ1U2KztNHhJUNjgqKywkRUc4OTlMXTFsPS/8QAGQEAAwEBAQAAAAAAAAAAAAAAAAEDAgQF/8QAKhEAAgIBAwQABQUBAAAAAAAAAAECEQMSITEEE0FRIiMyYcFCYnHh8BT/2gAMAwEAAhEDEQA/AKUx0gnoAM/Kr/wz0UTywxSm8jjMiI5Q2xYprUNpLc4ZIzjOBVAmi1jR+OQnnlyF/bXo+S6EU9tbg/WjlwM/0QiH/VUccU+S2STXBiPZPslLfT3EAnWE22AxaEvrPMlj2XWukfRZ6n63lUnwz0czyi5LXKRm3lkjI9XZtYRQ6yA80YDKwON8Z6mrX2EteXxri64wDyHHmJOZJ+tjV3uLZVS4df8AWKWPmRHoz8lX5VvQjGtmS8N9GUs1vFcG/ijWVEfBtj7PMAIUsZhk5IHdmoftZ2Tn4e0fMdJY5MhZEUphgM6WQk4yMkEE9D0rTV/mS3/8K0/54qjvTX/J7b84/wD1SUSiqCM3ZV+z3o4lu7eK4W9jj5qB+WbcsVz3E84Z9+BTmX0XzLLHF69ES+vf1Y+zoAPTnedG9CUQW8u8ADMMJOB1PMk3+6nfBEA7UXJAGTFJk464S1pJJrgG2nyMoPRdO0skXr0f0YQ59VbfmBu7nbfVptwD0eTXSysLyNOVPNAR6szZMEhTXnnDAOM47vOtgtoUE8rK+XYR6lyPZChtJx1Gcnr4VX+wA+hu89PX77+8NWtEfQtb9lBi9HEzXTWwvYjphSbWLckHXI6adIm2xoznPfSfC/R5cTG5BuUjNtK0Rzbs3MAjSQSD6UaQQ423xjrVg9GPB7O2v7lLK5FzGbeJmdXiYBzLKNOYgB0AO++9aHJbKomdf9YMnzKppz8gB8KNEfQa37ME7Jdn2v5GRZ0g0or6mj1htTacAa1x086tNz6K5kRmN/FsCceqsM4Gcfh6z20hU8gkAkSQ4yOn0idK1T0+Rg2MeQDiUkZHeIZd6xFKuDUm75IOb0bTrHFIb2P6Volx6q23NIGc87fGqguvR5PFc29v65GTOJiH9WYBOSqkgrzvazq8RjHfWomFHt7cSPoANuynIGXUqVTfxOBjrUfxz+dOHfkXn9nHW9CM6mU+67AzQLqe/gI1IuDat/rHVAcesdMtXXHZm7F3HZ+sREyRPNzRbMFQRsqFDHzdydY31D3Uf0w8ItWJuDcql4kSLDCWh1N9JtIFYayQSxyv4tXfh1/FLbxcRbA/ixYnwVgjuPLBjo0oVsybidpIk72wcTyLIkSlE5StI4U6cFmwBqwTnuNWMeji66euW4fGrl8hz34Pt83JG49rT39KqltxAwtHeyZJE3rLgnH4RyzrknqFcgd2QK1Jmj4jGLvht4qTKjRrKqpIAHKuYpYnHsnKqe4j3VmKTG2zPuAdlrq7muYTKls1qyI5MZmDO+o4Uh1wAoQ+esdMU27Tdn5bCWCF5klNwQFcQsgRjLHFuDI2r8ID1HSrx2NW4gtuIz3mPWOZIZG9kK3Jt0CsukAaSBkbDrvvTP0qR64+FzqM/wAbt1J8FlZHz841+da0oNTK12i9Gkqz2kbXkZM8jxBhbMNOmJ5ckc46vqY7utOn9DcudI4hEXAyFNsRt0BP0xIGds4q+9rf5bwv85l/uk9Pz/OI/NT/AGwocIvwCnJcM8/xQyWt1JbzAB0bQ2DkZwCrA94IIPxqbpt6Tf51uffH/ZJTBONbDI7q5n8LaOitSTD8DjVrq2EjBE58TMxIAARw+5OwHs/fWzcS7XWy3trEGtnWRZi0/Nj+h0Bds92rOOo6d9YaVz13FALdfxVx7hVIz0qico2za7DiFsnFbqX1iDRLbW3tc6PBdHnVh9bqBoPxpTgfamCS1nD3EKskt3EAZUGVSWQRkZO4KaMEbViQtk/FX9EVzRKfsrt/VFa7v2M9s2nhV5bScLtoGu4EblW+cyx5GjlsQRq6+zjyzVf9L3HLeZLeGGVJHEhkbQwYKoRlyxXYZLDA67HwrNTboeqr+iKVSIAbAD3ACk8loax0y6+iK9jiurlpZEjBhiALuqgkSSZA1EZ6inPCL+Idop5TLGIjHIBIZE0ElLbADZxnY7eRqhPEp6gH3gGgMQ6aRjwwMfKkslIbhbN1suOWourhjcwYZYMHnR4OA+e/zqL7C8Xt1iug9xCuq9vWGZYxlWnbDDJ3BG4PfWPi2T8Rf0RRzaoeqL+iKfd+xntmmdiOGWfDrqTTfxSiSFfaZ4VxokJA9lt/rmpvs/2qgkhnV54VaOe5jGqVBqUSMY2XJ3Uoy7jasYFrGPsL+iK5olOPZX9EUd37D7YS0XAhzth4Sc9ABImTnwrR/TVxGGayRYZopGEhJCSIxA5MgzhTnvrPSooqQqOige4AVlTpGnCzaL7jNsbe2AuIMrJakjmx7BXTOd+6kOM8ZtjxKwcXEJVUu9TCWPC6kjAyc7ZrHvVk/EX9EVwt06BFx+SK33DHbNH9JFlaz671L6LmQwMFhVoW5hTU4HXOSTjau4LxKEdn2iM0QlMNyOWZED5MkuBpJzk5G3nWcraoNwi/oinVpCmrJVc+JAzRrDQSttcGKSCY5IikjdgB9hWGvAG5OknatNXi1m9xHeLfQhFhkjKc1AG1vG4ZgSCCvLIwRn2jWdZQDbLHxPT5Uk1hr9rlD8oqB95FEZUDVmkX3a2zFnPPHJDN7EsgiaRAZdKkBNJ39rSBjGdxtUT2m4tb3PD7dhJAjiWym5Qmj9jE8WtcZGyqW7u6qR/By5yyrnyUfrxSEltGrfUTf+qM0+4LQaT2n4xbtd8NZbiEhLiUsRLGQoNrMAWOdhkgfGpc8StPWOf65b/guXp5sf4+vVnV8MVjbQJ3RoP91f1Yplf8LjdGXSoJ6HSo3HTuo1hoC9t+Ix3HELiaFg0bMoVh0bQiqWXxGQcHv69KhcUnbNkY/fI60rXLN2zrith/iuJrsUIFUJHAUYLXCjYoA4Yoa4UYCgYAFCRtvQO4AyagOJcZJ2GwoSE3RMzXqINyM0wl44Og+dVozEkkk0TrW9JhzJ+Tjp7hQfw65HTFQOKMM0aUJSZZ7Li+SNXToem1TAOenSqIjd9S9hxJlAwPf1wRSaNWWbFCBSdrOHGRS+KQwmmjotdiu1+FIC89lBAEJKgt4tv8h0FIcZ4opOAckdw6D41UoLhhtnb7qfB89Bmt2Y0nTSsT1wD3D/GkXwPfSrIT1PyogIH+A60hieSem3v60AiHU/fXDO++N+mOlCUHU/fQBWOIRBJjj6r+0Pf9qjafdUnxqHWmpRkp7QPiO8fKoZTtsanKNlIS2JKhxQijYrYgAtCBXZrqAO1V2aDFGAoERHHbggBAcZ3NVwjJ8ak7wa5GPdkgUEdpgbZyMfM1pbGXuMUt/HauWKphox3nvrorPOSd2PQeOaGwURkbAgZI/wA6Vktl0Bh161bpuBXDxqhAXAFN+LcAmWNUWPUBtqA338azqK9sp0tsQfeKecOUBSfHapK44LKWzoIAG/nTC/tGjADDDYzRqMuDQ74XOUk32DbHyPUVPhqpq3DZweuKsPBrzWuD1FNmUSJFBRsV1IYFPrWXbHWmOKUhfBoESBQnr91EyAcfqpVV1Df7ulA5A6dR3CmISKk+A+80HKA3PzNKkk+X66KUA3P30AEyO4Z9/TFQL9m3ycMcZ293dU/r8B8+ldl/EfKgCFBrqACjKKDRwWjAUIFCBQAGKJOcKfdS2Kb331CPGkBBqi41fi93xzmpjgPD/WMsdsY7upquaiHC92a0ngZGgYGKbNY0Bb9mI8gtvju7viasNhwaFMaY1B8cb/fRYmp+kuKwWSFygFISClUtmbem1zMq7ahnwG9A1sR17H41U+P2ikgt3dD+yrVdSORnQSKiLqMSKVPf86yN7oz6+xzCwxgfvinfZtvbbzFNuJ2jRy6T9XP+VWTg3AwIzKMg+Hl4VSzmUGxfFDijbCuzTMhdNdXV1Ah5aNnYn4U4JHQb+6o2M4NSYkGNt/IUCE11dOn3mgKAbn765tWc9M1xQDc/fQAVpPAfHpRct5ffQtJ4DPmdhRNbeXyoGRYFGAoVFGAoGABRsUOK7NIDsUz4gdqdkUlcplaYyrRr9Jv+5q69m7saMnuqo3IAJ8cZHv8ACpvsg6s2lu45xRyOLpl9s72P3nxxtUrFOpI22zURHxu3TCkAk7BR1PwG9Fu7nK6wjJgjBz1+FFFkyevZSQR0HlUV69BbHLYz5jJpx62GCny/c02a3UtqwM5zSvc1pEpeOcw+xG5H5LDb40SaHUNWMVMpITsc4+FJ3UWxrLYJFCvrbVdQ4GcsAfDGd81Z+NxBEcKc4GM+IqKul5cqt4N91SHG5AEIG+rA38e+kmN7WV2jYrtq7JqhyHaaAtXYoM0AFJp3aT93WmhFch0nIoEWnslZie6WORVKkPsQSMhCVJ3HQ4NXGXsrGjoDHC2skZETezgZyfbNU70dTs1/ED0xJ/ZtV6uZvp5dbBva9kc2RdIAG2lRipZ2oxT+/s58zoq3b2xjggQxxIj84oSoIDKEY9CfEVQfWH8a0z0rt/FLfH9IO/P+qbvPWstyaqlSRWH0i4NdvXAUbFBQAChAoQKNigQXTRZFJGKVAoQtAFT4pEQc0pwC4KydcZqX4nZagcVWnDRt4YNLg0nZq3A7NQNgNR+130rxQsRp6+NF7KyB4w3eak+IxYibHWhnRFbDbh0Y0Z+FPYjGOtN+zVuGX2jtg/OlZYMMQu/7POsNFVRLxNHjYU34ins021nG3zoeaXUg9f33pmPJWuLR5X3VAnikszYkIwuwwMeWT51ZeJx4U1VbOLcnzoiieV7DrNCKDIoryY67VQ5w1FLUzlv1HTc0ze7kY4UH3Ab0CJOSYDqRXLICMjepHhHYqR1EkwkIxkIiMSR13YjA+FM54kVvo88tgGTPUDowPmCDToLLF6Nyf4Qi90n9m1aLxBn1yZZtG+wliG2OmNOoe6s79G/8vi90n9m1X+7wZpSuTpPtERwbHAJALDU2BUOpdQX8nP1HBB+lY/xO2wMDmDbwHKast3rUvSrk2sB1FgZcjIAwDE221ZfirLhFofSL4oUFHC1w2oNgqKNprs1wFILOzXEUYCh0UxCemq9xuwPUCrIT4U14ihK0hoV7BcTwNBPTar1dsShx4VjVhe8icN9kn2vdWv8ABpw6AZypGVPiDQ0WjIjuHSpkhWfPeE3+7FWKzt3KnRE3dln269/iagpkMEg5bcvOfa0g7k94Pup767OwKSS+IIChdQPiR+ykbd+BLi6EAgTe2MghQMKR1znc0rwTUY1Z9yev7KQuogsR7u4DvPup9wPdAO6ih0yP4/H9Gxqp6cZq69plARqpinPd8acINvYjlaSI++uWBCxgk9endTeHhdxKcY9+TsPM46U/vrF2IK7HBBOe49PvqVkvMWckYADFfqgYwRjO/wBrp186t2mc3cXgr1paBJeXJhnzgAH2cjpv5/tqVg7Qi2nKctPqjSQCDpYZBGT++9QAhLaXDYKsjeeFIOB57UvLKsrfTIGZSxQgOpjQksEZhs2MnbG2aKC2at2J7UetZtbghnQCSNhldaKdgcHqNs1Vu1dkI5pkUbI4lUf7Ob649wcE1Edlr4W1zHdOGEMQcM2M4LLgLnzNKcV7WCa55pjXlOOUfaJZVY5LHu6427qfgSJ70fq3rqaSAdEuD4Hltg1oAJ+pLHCshIMju6HLYxqVQc5Ix4VQPRsCL9EP2OYvyRsH5VpzwgPJi2ZtZ3fUvtbYyMnIrlzQtL/fgxlVlU9Kbr6pAFIbEuMjpkRtWY6j4CtI9J86+qwgJp0z6cddxG3h1rM/WW8K3GVpMrj3iPBQ6d6EYFGzTNghKEYooowNAA5NFIoaDIppCOzRZEyN6URSelLw2ZJx18avDp3IlPMkRFp2ZWRw7/Vz9Xx9/lU7wKXkO8WfY1ZT+pk7D8n9VPrZMbYpOez9vWOhGD76rlwVHYWDLctyb4tac6HI2Yd3uqEsbqTZZAG07DK5+8VLWU5UAE/kkn/hb9hpy8Ct7Sj3iuGj0YyoaKrOfbA6YHdpH9VfH31M8Mt8b9AOnupvbRAHNPbm4CITQOUis9qbjYjzA+Qyf2VXYhsBUzxFSw1HpvjzJ6n9nwphBHkE+BNdHTfUcnVL4AQmRSb24xTxY9sUoIwQa9CjzbK9cWYGWA6AnAHUjfHxpCOZ50DYSNB9pnUY+HWp+SPfPlVL7RJyZtkDCQZXPRT0OB02rmy4vKL48ngDiYGGjjnJjOCw3AYjv91M+H8GRtRaYRqMZONWd99hQz3PMxrY5UYGMKAPgKj5Jyh3JI8T1+ff7qi4srqNg7CRheJW+iTmI0bjX+NoiI1Edx8a0W6CiVsxSZJ684AN5hdew+FYp6HJ88UhGdikvu/BtvWw3lviSYkN7TZ1GEsAukDAYnuxnIrj6p1Ff1+SeV7FU9LN16tZRM8edVwQq5G2YnO57+lZH/8AlB/ol++te9M/D5J7K0WIFiJgT3bcmQZPzFZWOxdx4r86tjiowSRSOySROZFGBNWiDshgDXIWPkoG/wAzSp7IKftsKNLKNoqQNG1VabjsU+gmKT2xuFYYz8RVRk4TPqKzEpg/VH+NaUG2JySDCUE4G58qdQwk0tZ8NCjpgfeakY48dK7MWCt2c2TLeyE4LTAxTyGMKNq4RE13JbxrqSOe7BMe+RSijwoqsw6jPnSqyr7vfWmgToUiIOx+/wDaKBrZ19qJh7m3BHhkbigABrvaXoa48nSp7xOzF1bW0g3r04GOTv8AlLj/ABpFhI+8xGB0Vc4+JP7KU9ZPeKI1z5Vz/wDNkOpdVjoacUlz3YAppbxkDzp7Oc93z/woyR4FXw4HHdnL1GdT2Q2ZaVhXahdetHjHs11I5GISR/v76qXbeH6JG71Yj4NVwbpVf7WR6rdvLDfI0pLYcXuZjzTk704B1LvQG1BP7BS1xA0ajUrLnpkEZ92a5Krk6LLf6DD/AKUiHgsv9m1bbxHTzZB7Gc7nmTHGQMFlA0j3VinoVUrxCNgMtomIXxxE2PnW2Qsjhiqzc2Q6mQZUKcBSrEqBp27687q90ooWTihPtoVW3i1MMBhv0B9g9KoZ41b/AI4qy+laMC0t1O2JAN9+kbeHWspKj8Y/oj/GquelJHTCFo3JrfvpWOEdMfdSoANCgzn996sTCmHG4/fyphxDhscvUAnqD31MA5pOaDvFNOuBMot7wkocnceP7DSKwAVc5rTXkY7vnVdu4NDYPwrrxZb2Zz5IVuhiI8UZjjupUCuYV0kgmqi48hRymaAIaBCeP6tdpY9wFKYNCKAE2TzojRe+nBFBigY25fkaKy+ZpyxopFIBk6N3EGk1l07EYFOZIvL5UgQRtn4GsDAfptUbxCDWhXxBHzFOp2I3xjxwf2UBHTPfvQ90C5M1gtJ4HPLkAO4ztkb+Y26U0uDlszSNI3mS2fj3VL9tdccmzMFkGcd2e+q9ZAO2ksFzjBI2+J7q4J2nTOuO62L/AOhy6DcWhUDHsS/dGa3q0lPPdcnHtHGoY+zjbG3f+3urzR6PuNLZXyXUqvIqLIpWMLk61KgjUQPvrXLP0oWxcyC2u98j2hbhRnH+08hUJvdV7NuEnVBvTrOUtrUj/vGPhyZKy5UyM4O+/Q99W30k9sLbiEMcSrIpjk1nUE3GhlwMMd/aqg6F7uZ+lWMlNlo2kelgR8a5V+FJo/j3dP8AGnCmuggACR16UstJMPvpJrkRqWc4VQWJ8hTAPIuDkUw4tY8xcj6w6Ug3a236GO7zv/2K7ycdSBy9xuOlJf8A5VbbgJctvg6bO6YqdiVbTGSrAEbHfenF07E1aogyvcetcaecWZNHrCE6CcH2W1atWnGjGrVnAxjOahf4UH/d7z/2V1/9dd0csWt2cssbT2JDFAwptDxGJgx140DLBwyMo/rK4BHxFGjuJHAaO1uXQ9HEJAI8QGwSPAgb1pzivJnS34FwK4mmg4rGRkCRjuCiQyvIpGMho1UsuMjqO8UU8VTpon1deWLafmAfjGPRqC+eMUa4+w0v0PM1zGmP8LL3RXJI6gWlySuRkagI8rtvvXLxUf0F5/7K6/8ArpdyPseiXodEUjdXCJjUQM7VHS8VdtSmKaHIOgyQTR5YAnSC6AEkAnHXakbm65rRpGjzSNGdUaKWYBujHGy7jqceFPUquxU7oXu7xsuEAGldWrOcjuIHhSSOSQRudW+2djv8NjRmiMQT1mKeEFeX9JEQrEnprGQDvsCRSovVH1Ybhl3GqO1uHTbY4dUIOCCNj3UnOPNjUJBLsDx6d1FAzSV5fADU0VxGo3LyW08aAebOgA+NFlvNKktDchQN2a1uFQDxLFMAedZU4+x6ZeiF7V8O5sa+KnPw76q6WkKdfaPgu9Xu5LMrD1a7OQf+x3P/APFVxLYKdOlkI2ZWQowPXDKwBHUHfxrz+rau0d3TLamMV1fYjCeZ60Y2bN9dz7hsKkmx8qbscmuK2zrobJaheg/f30HIPl86XeTHSkNVIKR6IA7/AAo6vmmSz0dZsV3nESCPUb2itWmtZ0T67RuF/K0nH304R6VZvPx+Axk0Coh5O1aGaFxDcaESVZT6rcZV25ekKujLjZt1yNqd9hLjmC8fSy6ryUgMCraQkQUlTupIAODuM0eW/UA6NJXbQ2SDq71bvPvruxD5F2T1N3Jn38uLNAyu3P8AI2/Pf/kRV043fNDydODzJ44mzn6r5BIx39KqFyoNg3iL7/5EVZe1fS1/O4P1mgCK7b8OjkuuGllB1XBjbYe0gglmCN4rriU4/wAam+IXrpdW0Q+rKJy+2/0aqVwe7cmo/tZ/KeGfnbf3O5pfi/8AL7H8m6/5EoAj7q2VeNwOowZLS414+0Y5IApPicMRnwx4VJT8LxxGO5A+tbyQufyXR4/1yUz4gf8ATFp+aXf9rbVYobkM7p3xkA/7yhgfvI+FAFIvO1kNnfXyT6xrEDJpilfLcnSVOhSF6L1x1qS9H3aKe7SQTxJE0XLACMxyGQNvq76ieLRBr67yob8Dscf0I8afej4Hm3uoAe3DsDkAcqqvGlDUTU250RXaa+kurhopFjWK1uMqQW1ueQy4I6AYmPTwqY9GVvGIJpEUAvcSAkd4jIRR7gB08z41X7201XV43X6fpkjP0UfUd9Wb0ajFq4Ax/GJ9vD6Q1qarGqMxdzY0te1NlPaPFe3doHYzxyRvNCpAEjooKFtjpC/rpT0WMx4Nbk/WKSk+/myUt2Wsree0WR7WDVmVCeWjFjFK8eskrnLaMnzPfTf0TtngtqT3pJ/ayVAsL9plF3waQjcTWyuCPNVcGi+lS45XCpsdW5UfweVFb/hJrvR5KJ+EQr1xG8J/8tmjx/w1H+mWQ+qRRgfWlyfIRxSPn9IL86ARZO1/F5LSzknij5rppwmGOcsAfqgnoSendWD8RvmnnmnddDyvqZRqwpCqmMNv9kda3ntbxo2do9wqq5TQNLPoX23VN2wcAas9O6se4hwx52kugUJldpCqPrUFvsh8DPTwqObgthW5BEbf5UiVFPTFjY5B8DXNEMdK5bOmhjIuaDRTsRedB6v++9KxUX+Ljv8AWHzFOouNef3/AHVlEl2VGdRAG5I3IHecd+2dqu/afsVNaQwzRXbTCWaGLBiCYWc6VcYY5OSu23XrXZGTZzSikWyLi2e+n1txEFhkA5BADHAJI2B+OPnVT4x2Nnt5LeGK8MstxIVVWiCqiIheSViGJwoA2xuSBtmp9ewGCFPErgSlSwUC3C4UgFhGULaQSv2u8b1TcxsOXuVU5XQQmcrGSQNS7bt0Ocj41G8I7Tmz5wNrPKJbh5A6GEBQyoNLa3BBGnwprYcJuZrue0lkWOWONXMoi1rLG5KqyoWGg7NnruDStt2VuHuZ7U3v4KKB9Zt1JfnmZcEa+7kjfvz5VS1RiV3sSiWbSWPsblp+fpyuR/GhPoJzjONuvWn9x2ilONXC7htJ1Al7Q4YdGGZdjud/OqnDxKWyN3AJA/IOnJTAb+LxzghATj6zDr3CrNb8IvGjWQ8QRQyq2DapgagDjJk86mjTVDPjJubt4pBH6ubZubGrsrM8mNOG0EhU0s67En2s7Yp5N2tjDI09lcLMmrGFR1XUMNpk1AEHA3IHuFMuJW17DPbQmeNhcO0YmEOGRlhklw0RbDA8s75/zdXfZK6YZe+VtO/8kT5Z11tV5Mu/BCtx2T11b+SElVieFIEeMuquyNrdmYKWJXcA7bddzStt2nkS7muvVpTHNFEnJ1w61eIv7f4TTgh8dc+yKDgHZ+e7tYrn1tYhIurR6sjadyPrF9+lE7R8MuLG2e55kdzGi5YCIRsAdg64YhhkjI22qvyn7J/MQdOI82aacxtHzeXhGKFhoQKc6CR3eNG4Vxx7WWdhbTTCYoRyzENOhNJB5jrUhB2SuWAYXqjUAceqp3jOM681H9m+FXd5bpcG4WAsXHLECyY0OUJ1FhndT3VtzxuOkwozUrAtZGZ5pSjJzpNYRtOVGhFwSpI+z3GluFcaayaRWieWCVzIDGFLxuQAylSRqUkZznIJPwb8O4dcT3V3ai6VDamEGT1dTzOdFzPq68Ljp30e04JczXE1ubgKluUDTLEgd2kQOFRCWVcA5JOeo2oc8bjpBRmnY+t+1ojzHDw+cRdVwYUOqRmZyUZ9hk+ecmobsf2ieys4bF7Od3jVgXVoAp1OzZGqQHHtDuqXk7JyqjvbXzzuuoaJlhKFkyDHqiRSjZ2zvjwqP4JwR76BbyS5e2iZS0YjEerl/jyPIrAA4JwBsMb91T+XRT47EuyfG34fByGtpp8uWUxtCANSrlTrdftaj8a7tPdScQAPq8kGiOUASNESzSaMEctmHRT18aT7YcKm4fbNdxztcxoMkSLGHGrZXVo1VWXJGQR0OcnpUjxzhU9nbvdPdCVI9JMfq6qSGZVwGDnH1qjk/aVhX6h/J2zZsqeGXLDza1IOPIy0wt4i7zSGIwiRlKxnRlQsaqfqEjcgnY07Ts7KyLJcXrWxYqBHEsACtIQqRl5UYu5JA2xknAzTTjMdxaPDE0okW4kSKOYoutHY7iRBhX9kMQRj6p2HfKUZNFYyhF7ETxngavvjB7jVTu7R4j7QyPED9daDxrh11A9uhuFlFxLydfIVeUxUsraQ/tA6WHd3Uld9k5jcJbNeKeZFLLq9WTblPEunGvv5pP8Au1J4GV70TOo2z7qPirNxnsI0NtNcrdauUXHLEKqGKSaOoc4zVd9Wl/E++pTxuPJuM1LgrJ3Fbr6O5FveFWyybmB0U566rWQFD8QqH41g4atg9AzfQXe+3PXH/opmujFyQy8DqXi3N7Sxwg5S3tZF/wDMfS7f8Jjq0TfzpF+aTf28NZb2WuVXtNMXb68t1GCT1YgFVz7oyB7gK1mWzf1+ObH0Yt5YycjZ2liYDHmFb5VZMi1RG2/89zfmEH95uKX4X/Ot7+b2P/PeVGWvEIz2gmjDDV6jEuM/aWZ3K+/TIpx4GpyxsXW/upiPo5IbVEORu0TXJcY8uYnzpiMj7b3IS+4iSMkthd9gfUYdyPcTvWtXHDzccOEKkAyQIuTkgZVd9qw30j3f+kOIFW2LAZB2JW2jRh8CpHwrYu1L44LMQSCLTOQSCMRDoR0rKfJprZC/aa5UXXDY8jWblmC5GdK2dyC2PDJA+NIdv+y/rixPqiHq/MfTJCZQ2VGwGtdJ9nrv7qzzsoI/X7AqvtGZ8sSSSBa3G2Tv31oXb3s/cXZgMAiblmQussssYOpVA3jRs9DsaaZkU9HbczhVsdl1xE47hqZv1ZqL9ILLacDkg9qTFusAYISNlCa2I2QYGdz4daluxKY4XEpABEcgIG42ZwcZA2+FRXGhns42d/4gvXx5KmmBcrWTEcXmEH/D/lSfDLZYVWFcAfSN85NR+96Y8TueXBbN/tbZf02VP+qlzcfx0R+FuzfpSqP+mgCA7Kfzvxj8qz/u1DwrjkUXE723lIQyPE0bNsrt6vGrRg9NWFUgd+TjOKL2TP8ApfjH5Vn/AHakrbglnd3/ABBLmCOVkeBhrGSFaBR08MqfnTAW49w6/ttclhKDEXeWSExK0gMjF3aNifa3JOk7+B7qQ9H17b3HDlsS3tJCYWTOGaIqVEi+KlSNx0OR3VYezNvNGkqTbKs8vJy2cQZzGM5JwN8Z6DFVbgnZ20nsTcW0EfrOm4EUq7OsoaRUIYH2TnB+NHgRXPSxFxS3tJIzNHNYsoQkQqsiAY0B8HvIA1AY8hWgdvwDw6QHcEwA/GeOmfbliOB3HrOBJ6rh84/DFBt79dOPSPNo4XM56KImPuWaMn9VIYt29/AQfntj/fIqS7ej+Rfn0H/VTrtRbNcQQ8gB/wCMWc2QRjlpcRyM4JOCAoJ88bVG+kK8VX4dGSNUl9CQM74QMWOPAZUfEUAWfiFmJQoP2JI5B743DfqBHxqsdq1k9etTDJy3ENx7WkPkFoMgqfgfhUzxDiXLvLaEnadJwPy4+U4H6OuortPJi9tv/BuP+aGlLg1HkiBwabltEbgtE8jTOhjTLO8vOb2uoUt3fClTwwVKCYGjcyueSb5OmNLgxS04XaNHEXugjsvtqNJ0nm6AW1HOdLBsDAwh79zZOD20dmZIBeSQvJhh9Lo9okxqdCMNRIUEZ8h3Vnj99RnDvwR/3q1GVK6JuN+S4XnDITcScy8zvqMhki5hnEuGyQ3VR7eR4aR7QxVnj7RzAaP4bk0/VB02pYLr0ajJpJ6EN1yO/cVm0fRfcKM3WhTDQHjuHDiUO6y6tfMDNr1nq2rOc1Oydu+KMug30ukjGyQq2Py1jDA+YOarx60JrGpo3pQZehHjnOd8565PfnNSsvaK7ZDFJdztEy6ChkypUjGkjG4xtUOKMeopJsGkTVpfsrKyuyOhyrqcMpIKkg92zEfGrDa8buWxm9u//WP+FU1e6pexqsWzEoot9q8iqFS6uVUZwqzELgkk/rNQd9fS6TCZ7g25XliMykpy8adBHhinsP1T7qjr36vyqqlUkY0JxZIJczyAB7m5ZQVYKZTgFCGUjzBAI91OZOdnmC+uFk0hdZlOdIJOnOOmSTTK0+qPdXN1r0VCLXBwOTvkVs55VeR+fcqz6eZIsxDSFBpXUcb4Gwp7bFtfN5swm/pg55hGAMMSCGXAGxBG1MW6CpOx609EfRnXL2O5WuZVKTXtxIh2KEQxgjwJijViPLOKG3tmjJNrNJblsauXoKsQMAmORWXOABnGdqWTrRoOp9w/XWe3Gqo1rdlQ7YSyzNyp7qa4UfZflquSPxIlVSR4kGmd1xO6dSkt3PIjdUaQlSAc4Ixv0FK8e/Dv7/2VH99eJnm1NpHsYYpwVof2HHLy3Tl213LGg6IBE6r+TzUYqPIbU0vJJppBcSTSvOhBWUsAyEbjQBhU9wAoo60uv1Kl3Jezbxx9EbxS64g7Ry+uzO8RLRlm9pGI0kqR4jamMvajiiOsks0khUEDme2AGxnHhnA+VTbdBTS66V0QyN8kJwS4HvDPSo64E0OfEof2Gp0elW18JP0az22+t8al6ulZDWz/2Q==" target="_blank">Mark Zuckerberg</a></footer>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".photos").click(function() {
                    $("#loader").fadeIn("fast");
                    var tokenFirst  = $(".faces:first-child .photos").attr("data-token"),
                        tokenSecond = $(".faces:last-child .photos").attr("data-token"),
                        scoreFirst  = $(".faces:first-child .photos").attr("data-score"),
                        scoreSecond = $(".faces:last-child .photos").attr("data-score"),
                        winner,
                        looser,
                        wScore,
                        lScore;

                        if (tokenFirst == $(this).attr("data-token"))
                        {
                            winner = tokenFirst;
                            looser = tokenSecond;
                            wScore = scoreFirst;
                            lScore = scoreSecond;
                        }
                        else
                        {
                            winner = tokenSecond;
                            looser = tokenFirst;
                            wScore = scoreSecond;
                            lScore = scoreFirst;
                        }

                    $.ajax({
                        type: "post",
                        url: "index.php",
                        data: "winner=" + winner + "&looser=" + looser + "&wScore=" + wScore + "&lScore=" + lScore,
                        cache: false,
                        success: function(data) {
                            $("body").html(data);
                            $("#loader").fadeOut("fast");
                        }
                    });
                });
            });
        </script>
    </body>
    
    
    <!--    _______ad88888888888888888888888a, 
________a88888"8888888888888888888888, 
______,8888"__"P88888888888888888888b, 
______d88_________`""P88888888888888888, 
_____,8888b_______________""88888888888888, 
_____d8P'''__,aa,______________""888888888b 
_____888bbdd888888ba,__,I_________"88888888, 
_____8888888888888888ba8"_________,88888888b 
____,888888888888888888b,________,8888888888 
____(88888888888888888888,______,88888888888, 
____d888888888888888888888,____,8___"8888888b 
____88888888888888888888888__.;8'"""__(888888 
____8888888888888I"8888888P_,8"_,aaa,__888888 
____888888888888I:8888888"_,8"__`b8d'__(88888 
____(8888888888I'888888P'_,8)__________88888 
_____88888888I"__8888P'__,8")__________88888 
_____8888888I'___888"___,8"_(._.)_______88888 
_____(8888I"_____"88,__,8"_____________,8888P 
______888I'_______"P8_,8"_____________,88888) 
_____(88I'__________",8"__M""""""M___,888888' 
____,8I"____________,8(____"aaaa"___,8888888 
___,8I'____________,888a___________,8888888) 
__,8I'____________,888888,_______,888888888 
_,8I'____________,8888888'`-===-'888888888' 
,8I'____________,8888888"________88888888" 
8I'____________,8"____88_________"888888P 
8I____________,8'_____88__________`P888" 
8I___________,8I______88____________"8ba,. 
(8,_________,8P'______88______________88""8bma,. 
_8I________,8P'_______88,______________"8b___""P8ma, 
_(8,______,8d"________`88,_______________"8b_____`"8a 
__8I_____,8dP_________,8X8,________________"8b.____:8b 
__(8____,8dP'__,I____,8XXX8,________________`88,____8) 
___8,___8dP'__,I____,8XxxxX8,_____I,_________8X8,__,8 
___8I___8P'__,I____,8XxxxxxX8,_____I,________`8X88,I8 
___I8,__"___,I____,8XxxxxxxxX8b,____I,________8XXX88I, 
___`8I______I'__,8XxxxxxxxxxxxXX8____I________8XXxxXX8, 
____8I_____(8__,8XxxxxxxxxxxxxxxX8___I________8XxxxxxXX8, 
___,8I_____I[_,8XxxxxxxxxxxxxxxxxX8__8________8XxxxxxxxX8, 
___d8I,____I[_8XxxxxxxxxxxxxxxxxxX8b_8_______(8XxxxxxxxxX8, 
___888I____`8,8XxxxxxxxxxxxxxxxxxxX8_8,_____,8XxxxxxxxxxxX8 
___8888,____"88XxxxxxxxxxxxxxxxxxxX8)8I____.8XxxxxxxxxxxxX8 
__,8888I_____88XxxxxxxxxxxxxxxxxxxX8_`8,__,8XxxxxxxxxxxxX8" 
__d88888_____`8XXxxxxxxxxxxxxxxxxX8'__`8,,8XxxxxxxxxxxxX8" 
__888888I_____`8XXxxxxxxxxxxxxxxX8'____"88XxxxxxxxxxxxX8" 
__88888888bbaaaa88XXxxxxxxxxxxXX8)______)8XXxxxxxxxxXX8" 
__8888888I,_``""""""8888888888888888aaaaa8888XxxxxXX8" 
__(8888888I,______________________.__```"""""88888P" 
___88888888I,___________________,8I___8,_______I8" 
____"""88888I,________________,8I'____"I8,____;8" 
___________`8I,_____________,8I'_______`I8,___8) 
____________`8I,___________,8I'__________I8__:8' 
_____________`8I,_________,8I'___________I8__:8 
______________`8I_______,8I'_____________`8__(8 
_______________8I_____,8I'________________8__(8; 
_______________8I____,8"__________________I___88, 
______________.8I___,8'_______________________8"8, 
______________(PI___'8_______________________,8,`8, 
_____________.88'____________,@@___________.a8X8,`8, 
_____________(88_____________@@@_________,a8XX888,`8, 
____________(888_____________@@'_______,d8XX8"__"b_`8, 
___________.8888,_____________________a8XXX8"____"a_`8, 
__________.888X88___________________,d8XX8I"______9,_`8, 
_________.88:8XX8,_________________a8XxX8I'_______`8__`8, 
________.88'_8XxX8a_____________,ad8XxX8I'________,8___`8, 
________d8'__8XxxxX8ba,______,ad8XxxX8I"__________8__,__`8, 
_______(8I___8XxxxxxX888888888XxxxX8I"____________8__II__`8 
_______8I'___"8XxxxxxxxxxxxxxxxxxX8I'____________(8__8)___8; 
______(8I_____8XxxxxxxxxxxxxxxxxX8"______________(8__8)___8I 
______8P'_____(8XxxxxxxxxxxxxxX8I'________________8,_(8___:8 
_____(8'_______8XxxxxxxxxxxxxxX8'_________________`8,_8____8 
_____8I________`8XxxxxxxxxxxxX8'___________________`8,8___;8 
_____8'_________`8XxxxxxxxxxX8'_____________________`8I__,8' 
_____8___________`8XxxxxxxxX8'_______________________8'_,8' 
_____8____________`8XxxxxxX8'________________________8_,8' 
_____8_____________`8XxxxX8'________________________d'_8' 
_____8______________`8XxxX8_________________________8_8' 
_____8________________"8X8'_________________________"8" 
_____8,________________`88___________________________8 
_____8I________________,8'__________________________d) 
_____`8,_______________d8__________________________,8 
______(b_______________8'_________________________,8' 
_______8,_____________dP_________________________,8' 
_______(b_____________8'________________________,8' 
________8,___________d8________________________,8' 
________(b___________8'_______________________,8' 
_________8,_________a8_______________________,8' 
_________(b_________8'______________________,8' 
__________8,_______,8______________________,8' 
__________(b_______8'_____________________,8' 
___________8,_____,8_____________________,8' 
___________(b_____8'____________________,8' 
____________8,___d8____________________,8' 
____________(b__,8'___________________,8' 
_____________8,,I8___________________,8' 
_____________I8I8'__________________,8' 
_____________`I8I__________________,8' 
______________I8'_________________,8' 
______________"8_________________,8' 
______________(8________________,8' 
______________8I_______________,8' 
______________(b,___8,________,8) 
______________`8I___"88______,8i8, 
_______________(b,__________,8"8") 
_______________`8I__,8______8)_8_8 
________________8I__8I______"__8_8 
________________(b__8I_________8_8 
________________`8__(8,________b_8, 
_________________8___8)________"b"8, 
_________________8___8(_________"b"8 
_________________8___"I__________"b8, 
_________________8________________`8) 
_________________8_________________I8 
_________________8_________________(8 
_________________8,_________________8, 
_________________Ib_________________8) 
_________________(8_________________I8 
__________________8_________________I8 
__________________8_________________I8 
__________________8,________________I8 
__________________Ib________________8I 
__________________(8_______________(8' 
___________________8_______________I8 
___________________8,______________8I 
___________________Ib_____________(8' 
___________________(8_____________I8 
___________________`8_____________8I 
____________________8____________(8' 
____________________8,___________I8 
____________________Ib___________8I 
____________________(8___________8' 
_____________________8,_________(8 
_____________________Ib_________I8 
_____________________(8_________8I 
______________________8,________8' 
______________________(b_______(8 
_______________________8,______I8 
_______________________I8______I8 
_______________________(8______I8 
________________________8______I8, 
________________________8______8_8, 
________________________8,_____8_8' 
_______________________,I8_____"8" 
______________________,8"8,_____8, 
_____________________,8'_`8_____`b 
____________________,8'___8______8, 
___________________,8'____(a_____`b 
__________________,8'_____`8______8, 
__________________I8/______8______`b, 
__________________I8-/_____8_______`8, 
__________________(8/-/____8________`8, 
___________________8I/-/__,8_________`8 
___________________`8I/--,I8________-8) 
____________________`8I,,d8I_______-8) 
______________________"bdI"8,_____-I8 
___________________________`8,___-I8' 
____________________________`8,,--I8 
_____________________________`Ib,,I8 
______________________________`I8I -->

    
    
 
    
    
    
    
    
    
    
    
</html>