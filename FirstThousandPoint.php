<?php 

abstract class AchivementType
{   
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ','-',$this->name())).'.png';
    }

    abstract public function qualifier($user);

}

class FirstThousandPoint extends AchivementType
{
    public function qualifier($user)
    {
        return $user.' does achive';
    }
}

class FirstBestAnswer extends AchivementType
{
    public function qualifier($user)
    {
        
    }
}


$achivement = new FirstThousandPoint();
echo $achivement->name();
echo $achivement->icon();
echo $achivement->qualifier('mama');