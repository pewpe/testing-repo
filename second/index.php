<?
assert(isCorrect('') === true);
assert(isCorrect('()') === true);
assert(isCorrect('{(})') === false);

function isCorrect($source)
{
 
 
    for($i = 0; $i < strlen($source); $i++)
    {
        switch ($source[$i]) {
            case "(":
                $stack .= "(";
                break;
            case "{":
                $stack .= "{";
                break;
            case ")":
                if ($stack[strlen($stack) - 1] == "(")
                {
                    $stack = substr($stack, 0, strlen($stack)-1);
                }
                break;
           case "}":
                if ($stack[strlen($stack) - 1] == "{")
                {
                    $stack = substr($stack, 0, strlen($stack)-1);
                }
                break;
        }
 
        echo "sumbol = " . $source[$i] . ", stack = $stack<br />";
    }
 
    if (strlen($stack) == 0)
    {
        return true;
    }
    else 
    {
        return false;
    }
}
?>