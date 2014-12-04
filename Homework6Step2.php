<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <title> Homework - Step 2: Server Side Controls - Hard </title>

        <!-- Embedded Styles: only have to define once -->
        <style type="text/css">

            body 
            {
                font-family: Arial;
                font-size: 11pt;
            }

            div.BlackBar 
            {
                background-color: black;
                color: white;
                height: 28px;
                font-size: 14pt;
                padding-top: 5px;
                padding-left: 3px;
            }

            /* ---------------------------------------- */
            /* Form */
            /* ---------------------------------------- */            
            #frmDesktopCalculator 
            {
                background-color: #DDDDDD;
                width: 410px;
                text-align: center;
                line-height: 28px;            
            }

            fieldset 
            {
                border-color:       #888888;    
                border-style:       solid;
                border-width:       1px;       
            }

            legend 
            {
                color: black;
                text-align: left;
            }

            /* ---------------------------------------- */
            /* Label */
            /* ---------------------------------------- */
            label
            {
                display: inline-block;
                text-align: left;
                color: black;
            }

            span.Spacer 
            {
                display: inline-block;
            }

            /* ---------------------------------------- */
            /* TextBox */
            /* ---------------------------------------- */
            input[type=text] 
            {
                text-align: right;
            }

            hr 
            {
                border-color: #ddd;
            }

            /* ---------------------------------------- */
            /* Square Footage */
            /* ---------------------------------------- */
            #grbSquareFootage label 
            {
                width: 100px;
            }

            #grbSquareFootage span.Spacer 
            {
                width: 10px;
                margin-right: 5px;
            }

            #grbSquareFootage input[type=text]
            {
                width: 90px;
            }

            /* ---------------------------------------- */
            /* Drawers */
            /* ---------------------------------------- */
            #grbDrawers label 
            {
                width: 110px;
            }

            #grbDrawers select 
            {
                width: 90px;
            }

            /* ---------------------------------------- */
            /* Wood */
            /* ---------------------------------------- */

            #grbWood label 
            {
                width: 150px;
            }

            /* ---------------------------------------- */
            /* Buttons */
            /* ---------------------------------------- */

            #grbButtons 
            {
                border-width: 0px;
                margin-top: 20px;
                height: 35px;
            }

            #grbButtons input[type=submit]
                       ,input[type=button]
            {
                width: 150px;
                height: 30px;
            }

            #grbButtons span.Spacer 
            {
                width: 10px;
                margin-right: 5px;
            }

        </style>

        <!-- Embedded Styles: only have to define once -->
        <style type="text/css">

        /*/* ------------------------------------------------------------------------*/
        /* Width and Height */
        /* ------------------------------------------------------------------------*/

        /* You can assign two or more classes to style a tag be separationg with space.
        For example:
        <button class="Button w150px" ... /> */
        .w25px   { width:    25px; }
        .w50px   { width:    50px; }
        .w75px   { width:    75px; }
        .w100px  { width:    100px; }
        .w125px  { width:    125px; }
        .w150px  { width:    150px; }
        .w175px  { width:    175px; }
        .w200px  { width:    200px; }
        .w225px  { width:    225px; }
        .w250px  { width:    250px; }
        .w275px  { width:    275px; }
        .w300px  { width:    300px; }
        .w325px  { width:    325px; }
        .w350px  { width:    350px; }
        .w375px  { width:    375px; }
        .w400px  { width:    400px; }
        .w425px  { width:    425px; }
        .w450px  { width:    450px; }
        .w475px  { width:    475px; }
        .w500px  { width:    500px; }
        .w525px  { width:    525px; }
        .w550px  { width:    550px; }
        .w575px  { width:    575px; }
        .w600px  { width:    600px; }
        .w625px  { width:    625px; }
        .w650px  { width:    650px; }
        .w675px  { width:    675px; }
        .w700px  { width:    700px; }
        .w725px  { width:    725px; }
        .w750px  { width:    750px; }
        .w775px  { width:    775px; }
        .w800px  { width:    800px; }


        /* ------------------------------------------------------------------------*/
        /* Font Size */
        /* ------------------------------------------------------------------------*/

        /* You can assign two or more classes to style a tag be separating with spaces.
        For Example:
        <button class="Button w150px fs125" ... > */
        .fs8pt  { font-size: 8pt;   }
        .fs9pt  { font-size: 9pt;   }
        .fs10pt { font-size: 10pt;  }
        .fs11pt { font-size: 11pt;  }
        .fs12pt { font-size: 12pt;  }
        .fs13pt { font-size: 13pt;  }
        .fs14pt { font-size: 14pt;  }
        .fs15pt { font-size: 15pt;  }
        .fs16pt { font-size: 16pt;  }

        .fs100  { font-size: 100%;  }
        .fs105  { font-size: 105%;  }
        .fs110  { font-size: 110%;  }
        .fs115  { font-size: 115%;  }
        .fs120  { font-size: 120%;  }
        .fs125  { font-size: 125%;  }
        .fs130  { font-size: 130%;  }
        .fs135  { font-size: 135%;  }
        .fs140  { font-size: 140%;  }
        .fs145  { font-size: 145%;  }
        .fs150  { font-size: 150%;  }
        .fs175  { font-size: 175%;  }
        .fs200  { font-size: 200%;  }

        
        /* ------------------------------------------------------------------------*/
        /* Text Align */
        /* ------------------------------------------------------------------------*/

        .taLeft     { text-align: left;   }
        .taCenter   { text-align: center; }
        .taRight    { text-align: right;  }


        
        /* ------------------------------------------------------------------------*/
        /* Float */
        /* ------------------------------------------------------------------------*/

        .fLeft      { float: left;   }
        .fRight     { float: right;  }
        .fClear     { float: none;   }


        
        /* ------------------------------------------------------------------------*/
        /* Display: Inline-Block. Allows you to set the height and width like a block but text flow is like an inline element */
        /* ------------------------------------------------------------------------*/

        .InlineBlock { display: inline-block; }


        
        /* ------------------------------------------------------------------------*/
        /* Debug */
        /* ------------------------------------------------------------------------*/

        .Outline { outline: red solid 1px; }

        </style>
        
        <?php
            include 'modUtilities.php';
            $intWidth = GetFormValue( "txtWidth", "" );
            $intDepth = GetFormValue( "txtDepth", "" );
            $intSquareFeet = GetFormValue("txtPricePerFoot", "" );
            $intTotal = "";
            $decSquareFeet = CalculateSquareFeet();
            $decSizePrice = CalculateSizePrice($decSquareFeet);
            
            
            // Ensure the values are not empty prior to submit
            if ( $intWidth != "" && $intDepth != "" && $intSquareFeet != "" )
            {
                if (IsValidData( ) == true )
                {
                    $inTotal = CalculatePrice( $decSquareFeet );
                }
            }
            
            // --------------------------------------------------------------------------------
            // Name: Validation
            // Abstract:  Validate the data in the textboxes
            // --------------------------------------------------------------------------------
            function IsValidData(  )
            {
                $intWidth = GetFormValue( "txtWidth", "" );
                $intDepth = GetFormValue( "txtDepth", "" );
                $intSquareFeet = GetFormValue("txtPricePerFoot", "" );
                
                // echo "Value 1 = '" . $intValue1 . "'<br />\n";
                
                // Get the value of the textbox's and combobox
                $blnIsValidData = true;
                $strErrorMessage = "Server says, Please correct the following error(s): " . '\n';
                
                // txtValue1
                if ( empty($intWidth) == false )
                {
                    // Numeric?
                    if ( is_numeric($intWidth) == false )
                    {
                        // No
                        $strErrorMessage .= "-Width must be numeric!!!" . '\n';			
                        $blnIsValidData = false;   
                    }      
                }
                if ( empty($intDepth) == false )
                {
                    if ( is_numeric($intDepth) == false )
                    {
                        $strErrorMessage .= "-Depth must be numeric!!!" . '\n';			
                        $blnIsValidData = false;   
                    }      
                } 
                if ( empty($intSquareFeet) == false )
                {
                    if ( is_numeric($intSquareFeet) == false )
                    {
                        $strErrorMessage .= "-Price per foot must be numeric!!!" . '\n';			
                        $blnIsValidData = false;   
                    }      
                }                

                // Send an error message to the user.
                if ($blnIsValidData == false)
                {
                    //SendMessageToClient( $strErrorValues );
                    SendMessageToClient($strErrorMessage);
                }               

                return $blnIsValidData;
            }  
            
            
            
            // --------------------------------------------------------------------------------
            // Name: CalculateSquareFeet
            // Abstract:  Update the square feet when width or depth is changed
            // --------------------------------------------------------------------------------
            function CalculateSquareFeet()
            {
                // Get the values from the form
                $decWidth = GetFormValue("txtWidth", "");
                $decDepth = GetFormValue("txtDepth", "");
                $decSquareFeet = 0;
                
                // Divide the form values by 12
                $decWidth /= 12;
                $decDepth /= 12;
                
                // Find the number of square feet
                $decSquareFeet = $decWidth * $decDepth;
                
                return $decSquareFeet;
            }



            // --------------------------------------------------------------------------------
            // Name: CalculatePrice
            // Abstract:  Calculate the price
            // --------------------------------------------------------------------------------
            function CalculatePrice( $decSquareFeet )
            {   
                $decTotalDeskPrice = "";
                $strMessage = "";
                
                // Get the individual prices of the size, drawer and wood
                $decSizePrice = CalculateSizePrice( $decSquareFeet );
                $decDrawerPrice = CalculateDrawerPrice();
                $decWoodPrice = CalculateWoodPrice();
                
                // Combine the prices to get the total cost
                $decTotalDeskPrice = $decSizePrice + $decDrawerPrice + $decWoodPrice;
                
                $strMessage = "The total desk price is " . '$' . number_format( $decTotalDeskPrice, 2, '.', ',');
                SendMessageToClient($strMessage);
            } 
            
            
            
            // --------------------------------------------------------------------------------
            // Name: CalculateSizePrice
            // Abstract:  Update the size price when the square feet or price per foot change
            // --------------------------------------------------------------------------------
            function CalculateSizePrice($decSquareFeet)
            {      
                $decPricePerFoot  = 0;
                $decSizePrice = 0;
                
                // Get the value off of the form
                $decPricePerFoot = GetFormValue("txtPricePerFoot", "");
                                              
                // Do calculation
                $decSizePrice = $decSquareFeet * $decPricePerFoot;
                

                return $decSizePrice;
                
            }  
            
            
            
             // --------------------------------------------------------------------------------
             // Name: CalculateDrawerPrice
             // Abstract:  Calculate the drawer price
             // --------------------------------------------------------------------------------
             function CalculateDrawerPrice()
             {
                 $decDrawerPrice = 0;
                 $radDrawers = $_POST['radDrawers']; 
                 $intDrawerCustom = GetFormValue("cmbCustomDrawerCount", "");            
           
                 // 1 drawer = $35
                 if ( $radDrawers == 'radDrawer1')
                 {
                     $decDrawerPrice = 35;
                 }
              
                 // 2 drawers = $60
                 elseif ($radDrawers == 'radDrawer2')
                 {
                     $decDrawerPrice = 60;
                 }
                
                 // Custom drawers = $100 + $25
                 elseif ($radDrawers == 'radDrawerCustom')
                 {
                     $decDrawerPrice = 100 + 25 * $intDrawerCustom;
                 }  

                 return $decDrawerPrice;
                                          
             }  
            
            
            
            // --------------------------------------------------------------------------------
            // Name: CalculateWoodPrice
            // Abstract:  Calculate the drawer price
            // --------------------------------------------------------------------------------
            function CalculateWoodPrice()
            {
                $decWoodPrice = 0;
                $radWood = $_POST[ 'radWood' ];
echo $radWood;
                // Oak = $50
                if ( $radWood == "radOak")
                {
                    $decWoodPrice = 50;
                }
                 
                // Maple = $75
                elseif ($radWood == "radMaple") 
                {
                    $decWoodPrice = 75;
                }

                // Cherry = $75
                elseif ($radWood == "radCherry") 
                {
                    $decWoodPrice = 75;
                }
                
                return $decWoodPrice;
            }            
            
        ?>

        <script lang="javascript" type="text/javascript">

            // --------------------------------------------------------------------------------
            // Name: btnCalculateTotal_Click
            // Abstract: Do the math if the data is good
            // --------------------------------------------------------------------------------
            function btnCalculateTotal_Click()
            {
                var frmDesktopCalculator = document.getElementById("frmDesktopCalculator");
                
                if (IsValidData() === true)
                {
                    frmDesktopCalculator.submit();
                }

            }



            // --------------------------------------------------------------------------------
            // Name: IsValidData
            // Abstract: Is the data good
            // --------------------------------------------------------------------------------
            function IsValidData()
            {
                var blnIsValidData = true;
                var strErrorMessage = "Please correct the following error(s):\n";
                var frmDesktopCalculator = document.getElementById("frmDesktopCalculator");

                // Width
                if (isNaN(frmDesktopCalculator.txtWidth.value) === true)
                {
                    strErrorMessage += "-Width must be numberic\n";
                    blnIsValidData = false;
                }
                else if (frmDesktopCalculator.txtWidth.value === "")
                {
                    strErrorMessage += "-Width can't be blank\n";
                    blnIsValidData = false;
                }

                // Depth
                if (isNaN(frmDesktopCalculator.txtDepth.value) === true)
                {
                    strErrorMessage += "-Depth must be numberic\n";
                    blnIsValidData = false;
                }
                else if (frmDesktopCalculator.txtDepth.value === "")
                {
                    strErrorMessage += "-Depth can't be blank\n";
                    blnIsValidData = false;
                }

                // Price Per Foot
                if (isNaN(frmDesktopCalculator.txtPricePerFoot.value) === true)
                {
                    strErrorMessage += "-Price Per Foot must be numberic\n";
                    blnIsValidData = false;
                }
                else if (frmDesktopCalculator.txtPricePerFoot.value === "")
                {
                    strErrorMessage += "-Price Per Foot can't be blank\n";
                    blnIsValidData = false;
                }

                // Bad data?
                if (blnIsValidData === false)
                {
                    // Yes, warn the user
                    alert(strErrorMessage);
                }

                return blnIsValidData;
            }



            // --------------------------------------------------------------------------------
            // Name: btnClear_Click
            // Abstract: Clear the form prgramatically
            // --------------------------------------------------------------------------------
            function btnClear_Click()
            {
                var frmDesktopCalculator = document.getElementById("frmDesktopCalculator");

                // Size
//                frmDesktopCalculator.txtWidth.value = "";
//                frmDesktopCalculator.txtDepth.value = "";
//                frmDesktopCalculator.txtSquareFeet.value = "";
//                frmDesktopCalculator.txtPricePerFoot.value = "";
//                frmDesktopCalculator.txtSizeTotal.value = "";
//
//                // Drawers
//                frmDesktopCalculator.radDrawers1.checked = true;
//                frmDesktopCalculator.radVeneer.checked = true;
                frmDesktopCalculator.value = 3;

               
            }
            
            
            
            // --------------------------------------------------------------------------------
            // Name: Body_OnLoad
            // Abstract:  Body OnLoad
            // --------------------------------------------------------------------------------
            function Body_OnLoad()
            {
                var frmSimpleCalculator = document.getElementById("frmDesktopCalculator");

                frmSimpleCalculator.txtWidth.value = "<?php echo GetFormValue( "txtWidth", "" ) ?>";
                frmSimpleCalculator.txtDepth.value = "<?php echo GetFormValue( "txtDepth", "" ) ?>";
                frmSimpleCalculator.txtPricePerFoot.value = "<?php echo GetFormValue( "txtPricePerFoot", "" ) ?>";
                frmSimpleCalculator.txtSizeTotal.value = "<?php echo "$" . number_format($decSizePrice, 2) ?>";
                frmSimpleCalculator.txtSquareFeet.value = "<?php echo $decSquareFeet ?>";
                frmSimpleCalculator.cmbCustomDrawerCount.value = <?php echo GetFormValue("cmbCustomDrawerCount","")?>
            }            

        </script>

    </head>
    
<body onload="Body_OnLoad();">
	
	Name: Brandon Roberts <br />
	Class: IT-103 VB.Net #3 <br />
	Abstract: Homework 6 - Step 2 - Server Side Controls - Hard <br />
	<br />
	
	<div class="BlackBar" > Homework 6 Step 2 - Server Side Controls - Hard </div>
	<br />
	
	<form name="frmDesktopCalculator" id="frmDesktopCalculator" runat="server" action="Homework6Step2.php" method="post" >
	
	    <fieldset>
	
	        <legend> Desk Calculator </legend>
	
	        <!-- --------------------------------------- -->
	        <!-- Square Footage -->
	        <!-- --------------------------------------- -->
	        <fieldset id="grbSquareFootage">
	
	            <legend > Square Footage </legend>
	
	            <!-- Row 1: Width * Depth -->
	
	            <!-- Width -->
	            <label class="" for="txtWidth"> Width (inches): <br />
	                <input type="text" name="txtWidth" id="txtWidth"  value="" maxlength="3"  /> <br />
	            </label>
	
	            <!-- * -->
	            <span class="Spacer"> * </span>
	
	            <!-- Depth -->
	            <label class="" for="txtDepth"> Depth (inches): <br />
	                <input type="text" name="txtDepth" id="txtDepth" runat="server"
	                maxlength="3" size="10" AutoPostBack="true"/> <br />
	            </label>
	
	            <!-- Blank -->
	            <span class="Spacer"> &nbsp; </span>
	                
	            <!-- Filler -->
	            <label class=""> &nbsp; </label>
	
	            <br />
	
	            <!-- Row 2: Square Feet * Price Per Foot = Size Price -->
	
	            <!-- SquareFeet -->
	            <label class="" for="txtSquareFeet"> Square Feet: <br />
	                <input type="text" name="txtSquareFeet" id="txtSquareFeet" runat="server"
	                maxlength="3" AutoPostBack="true" ReadOnly="true"/> <br />
	            </label>
	
	            <!-- * -->
	            <span class="Spacer"> * </span>
	
	            <!-- Price Per Foot -->
	            <label class="" for="txtPricePerFoot"> Price / Foot: <br />
	                <input type="text" name="txtPricePerFoot" id="txtPricePerFoot" runat="server"
	                maxlength="3" AutoPostBack="true"/> <br />
	            </label>
	
	            <!-- = -->
	            <span class="Spacer"> = </span>
	
	            <!-- Size Total -->
	            <label class="" for="txtSizeTotal"> Size Total: <br />
	                <input type="text" name="txtSizeTotal" id="txtSizeTotal" runat="server"
	                maxlength="3" AutoPostBack="true" ReadOnly="true" /> <br />
	            </label>
	
	        </fieldset>
	
	
	        <!-- --------------------------------------- -->
	        <!-- Drawers -->
	        <!-- --------------------------------------- -->
	
	        <fieldset id="grbDrawers">
	
	            <legend > Drawers </legend>
	
	            <!-- Row 1: Drawer, 2 Drawers, x Custom -->
	
	                <!-- 1 Drawer -->
	            <label class="" for="radDrawers1">
	                <input type="radio" name="radDrawers" id="radDrawer1" value='radDrawer1' Checked="true" >
	                One (1) $30
	            </label>           
	
	                <!-- 2 Drawer -->
	            <label class="" for="radDrawers2">
	                <input type="radio" name="radDrawers" id="radDrawer2" value="radDrawer2">
	                Two (2) $60
	            </label> 
	                
	                <!-- Custom Drawer -->
	            <label class="" for="radDrawersCustom">
	                <input type="radio" name="radDrawers" id="radDrawerCustom" value="radDrawerCustom">
	                Custom
	            </label> 
	                          
	            <br />
	
	            <!-- Row 2: Filler, Filler, Custom Drawer Count -->
	
	            <!-- Filler -->
	            <label class=""> &nbsp; </label>
	
	            <!-- Filler -->
	            <label class=""> &nbsp; </label>
	
	            <!-- Custom Drawer Count -->
	            <label class="">
	
	                <select name="cmbCustomDrawerCount" id="cmbCustomDrawerCount" >
	                    <option value="3"> 3 </option>
	                    <option value="4"> 4 </option>
	                    <option value="5"> 5 </option>        
	                </select> <br />
	
	            </label>
	
	        </fieldset>
	
	
	        <!-- --------------------------------------- -->
	        <!-- Wood -->
	        <!-- --------------------------------------- -->
	
	        <fieldset id="grbWood">
	
	            <legend > Wood </legend>
	
	                <!-- Veneer -->
	            <label class="" for="radVeneer">
	                <input type="radio" name="radWood" id="radVeneer" value="radVeneer" Checked="true" >
	                Veneer
	            </label>           
	
	                <!-- Oak -->
	            <label class="" for="radOak">
	                <input type="radio" name="radWood" id="radOak" value="radOak" >
	                Oak (+$50)
	            </label> 
	
	            <br />
	                
	                <!-- Maple -->
	            <label class="" for="radMaple">
	                <input type="radio" name="radWood" id="radMaple" value="radMaple" >
	                Maple (+$75)
	            </label> 
	
	            <!-- Cherry -->
	            <label class="" for="radCherry">
	                <input type="radio" name="radWood" id="radCherry" value="radCherry ">
	                Cherry (+$75)
	            </label>                       
	
	        </fieldset>
	
	
	        <!-- --------------------------------------- -->
	        <!-- Buttons -->
	        <!-- --------------------------------------- -->
	
	        <fieldset id="grbButtons">
	               
	            <!-- Calculate Total -->
	            <input type="submit" name="btnCalculateTotal" id="btnCalculateTotal" MaxLength="5"
	            value="Calculate Total" xOnClick="return IsValidData( );"/> 
	
	            <!-- Blank -->
	            <span class="Spacer"> &nbsp; </span>
	
	            <!-- Clear -->
	            <input type="submit" name="btnClear" id="btnClear" value="Clear" OnClick="btnClear_Click( ); "/> 
	
	        </fieldset>

        </form>

    </body>

</html>
