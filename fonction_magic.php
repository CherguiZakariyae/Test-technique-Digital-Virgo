<?php
//il faut traiter le cas des nombre inferieur de 1....
function magic_inc($value, $operation)
{
    if (!is_numeric($value) || $value == 0) {
        return 0;
    }
    if ($operation == 'inc') {
        if (is_int($value) || $value >= 1) {
            if (is_float($value))
                $value = (int)$value;
            $y = "1";
            $o = "0";
            for ($i = 1; $i < strlen(strval($value)); $i++) {
                $y .= $o;
            }
            $newvalue = ceil($value / $y) * $y;
            if ($value == $newvalue)
                return $value + (int)$y;
            else
                return $newvalue;
        } else {
            //strlen(strval($value)) . "\n";
            $y = "1";
            $o = "0";
            for ($i = 3; $i < strlen(strval($value)); $i++) {
                //echo strval($value)[$i]."aaaa";
                if (strval($value)[$i] != 0)
                    break;
                $y .= $o;
            }
            //echo $y . "\n";
            $z = strrev($y);
            //echo $z . "\n";
            $u = "0.";
            $e = $u . $z;
            //echo $e . "\n";
            //return $value += (float)$e;
            $newvalue = ceil($value / $e) * $e;
            if ($value == $newvalue)
                return $value + (float)$e;
            else
                return $newvalue;
        }
    } elseif ($operation == 'dec') {
        if (is_int($value) || $value > 1) {
            if (is_float($value))
                $value = (int)$value;
            $y = "1";
            $o = "0";
            for ($i = 1; $i < strlen(strval($value)); $i++) {
                $y .= $o;
            }
            $newvalue = floor($value / $y) * $y;
            if ($value == $newvalue) {
                if ($value == (int)$y)
                    return $value - (int)$y / 10;
                else
                    return $value - (int)$y;
            } else
                return $newvalue;
        } else {
            //strlen(strval($value)) . "\n";
            $y = "1";
            $o = "0";
            for ($i = 2; $i < strlen(strval($value)); $i++) {
                //echo strval($value)[$i]."aaaa";
                if (strval($value)[$i] != 0)
                    break;
                $y .= $o;
            }
            //echo $y . "\n";
            $z = strrev($y);
            //echo $z . "\n";
            $u = "0.";
            $e = $u . $z;
            //echo $e . "\n";
            //return $value += (float)$e;
            $newvalue = floor($value / $e) * $e;
            if ($value == $newvalue) {
                //echo $e;
                if ($value == (float)$e)
                    return $value - (float)$e / 10;
                else
                    return $value - (float)$e;
            } else
                return $newvalue;
        }
    } else {
        return 0;
    }
}
?>
<script>
    function magic_inc(value, operation) {
        if (!isNumeric(value) || value === 0) {
            return 0;
        }
        if (operation === "inc") {
            if (Number.isInteger(value) || value >= 1) {
                if (Number.isFinite(value)) {
                    value = parseInt(value);
                }
                let y = "1";
                let o = "0";
                for (let i = 1; i < value.toString().length; i++) {
                    y += o;
                }
                let newvalue = Math.ceil(value / parseInt(y)) * parseInt(y);
                if (value === newvalue) {
                    return value + parseInt(y);
                } else {
                    return newvalue;
                }
            } else {
                let y = "1";
                let o = "0";
                for (let i = 3; i < value.toString().length; i++) {
                    if (value.toString()[i] !== "0") {
                        break;
                    }
                    y += o;
                }
                let z = y.split("").reverse().join("");
                let u = "0.";
                let e = u + z;
                let newvalue = Math.ceil(value / parseFloat(e)) * parseFloat(e);
                if (value === newvalue) {
                    return value + parseFloat(e);
                } else {
                    return newvalue;
                }
            }
        } else if (operation === "dec") {
            if (Number.isInteger(value) || value > 1) {
                if (Number.isFinite(value)) {
                    value = parseInt(value);
                }
                let y = "1";
                let o = "0";
                for (let i = 1; i < value.toString().length; i++) {
                    y += o;
                }
                let newvalue = Math.floor(value / parseInt(y)) * parseInt(y);
                if (value === newvalue) {
                    if (value === parseInt(y)) {
                        return value - parseInt(y) / 10;
                    } else {
                        return value - parseInt(y);
                    }
                } else {
                    return newvalue;
                }
            } else {
                let y = "1";
                let o = "0";
                for (let i = 2; i < value.toString().length; i++) {
                    if (value.toString()[i] !== "0") {
                        break;
                    }
                    y += o;
                }
                let z = y.split("").reverse().join("");
                let u = "0.";
                let e = u + z;
                let newvalue = Math.floor(value / parseFloat(e)) * parseFloat(e);
                if (value === newvalue) {
                    if (value === parseFloat(e)) {
                        return value - parseFloat(e) / 10;
                    } else {
                        return value - parseFloat(e);
                    }
                } else {
                    return newvalue;
                }
            }
        } else {
            return 0;
        }
    }

    function isNumeric(n) {
        return !isNaN(parseFloat(n)) && isFinite(n);
    }
</script>