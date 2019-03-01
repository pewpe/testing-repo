<?
assert(isCorrect('') === true);
assert(isCorrect('()') === true);
assert(isCorrect('{(})') === false);

function isCorrect($source)
{
 
    $stack = '';
    for($i = 0; $i < strlen($source); $i++)
    {
        switch ($source[$i]) {
            case "(":
                $stack .= "(";
                break;
            case "[":
                $stack .= "[";
                break;
            case "{":
                $stack .= "{";
                break;
            case ")":
                if ($stack[strlen($stack) - 1] == "(")
                {
                    $stack = substr($stack, 0, strlen($stack)-1);
                } else if (strlen($stack) === 0) {
                    return false;                  
                } 
                break;
           case "}":
                if ($stack[strlen($stack) - 1] == "{")
                {
                    $stack = substr($stack, 0, strlen($stack)-1);
                } else if (strlen($stack) === 0) {
                    return false;                  
                }
                break;
           case "]":
                if ($stack[strlen($stack) - 1] == "[")
                {
                    $stack = substr($stack, 0, strlen($stack)-1);
                } else if (strlen($stack) === 0) {
                    return false;                  
                }
                break;
        }
 
          
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