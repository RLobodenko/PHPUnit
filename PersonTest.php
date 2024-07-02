<?php 
use PHPUnit\Framework\TestCase;
require_once "Person.php";

class PersonTest extends TestCase {

    public function testgetName (){ // маленькая буква название функции всегда - и обязательно со слова test
        $Person = new Person("roman", "lobodenko");
        $this->assertEquals("roman", $Person->getName());
    }

    public function testgetSurname (){
        $Person = new Person("roman", "lobodenko");
        $this->assertEquals("lobodenko", $Person->getSurname()); // assertEquals - проверка на соответствие
    }

    public function testConstruct(){
        $Person = new Person("roman", "lobodenko");
        $this->assertInstanceOf(Person::class, $Person); // assertInstanceOf - тест проверяет конструктор класса Person создает объект типа Person
    }
    public function testAge(){
        $Person = new Person("roman", "lobodenko");
        $this->assertEquals(50, $Person->getAge());
    }
    public function testEmpty(){
        $Person = new Person("roman", "lobodenko");
        $this->assertNotEmpty($Person->getName()); // проверка на нулевое значение
    }
    public function testTypeAge(){
        $Person = new Person("roman", "lobodenko");
        $this->assertIsInt($Person->setAge()); // проверка на тип Int
    }



}