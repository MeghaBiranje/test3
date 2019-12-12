<html>
    <head>
        <script src="../assets/js/script.js"> </script>
    </head>
    <body onload="loadCountry()">
        <table>
            <tr>
                <td> Select Country:</td>
                <td><select id="country" onclick="loadState()">
                    <option value="">Select Country</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Select State:</td>
                <td> <select id="state"  onclick="loadCity()">
                        <option value="">Select state</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Select city:</td>
                <td> <select id="city">
                        <option value="">Select city</option>
                    </select>
                </td>
            </tr> 
        </table>
    </body>
</html>