<?php

    //-------------------------------------------------------------------
    // Name: GetFormValue
    // Abstract: Return the value of a form variable if it exists, 
    //           otherwise return the default value
    //-------------------------------------------------------------------
    function GetFormValue( $strFormVariableName, $strDefaultValue )
    {
        $strResult = "";

        //Does the variable have a value?
        if( isset( $_POST[ $strFormVariableName ] ) == true )
        {

            //Yes it does, so set it
            $strResult = $_POST[ $strFormVariableName ];

        }
        //The variable does not exist yet, so return the default
        else
        {

            //No, return the default
            $strResult = $strDefaultValue;

        }
        
        //echo "Variable Name: '" . $strFormVariableName . "', Value = '" . $strResult . "'<br />\n";
        
        return $strResult;

    }
    
    
    
    //-------------------------------------------------------------------
    // Name: GetFormValue
    // Abstract: Return the value of a form variable if it exists, 
    //-------------------------------------------------------------------
    function SendMessageToClient($strMessage)
    {
        echo "<script type='text/javascript'>alert('$strMessage');</script>";
    }

