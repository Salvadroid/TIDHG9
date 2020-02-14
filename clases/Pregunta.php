<?php

class Pregunta{
   private $Pregunta;
   private $respuestaCorrecta;
   private $respuestaErronea1;
   private $respuestaErronea2;
   private $respuestaErronea3;


   public function __construct($pregunta,$respuestaCorrecta,$respuestaErronea1,$respuestaErronea2,$respuestaErronea3)
 		{
 			$this->Pregunta = $pregunta;
 			$this->respuestaCorrecta = $respuestaCorrecta;
 			$this->respuestaErronea1 = $respuestaErronea1;
 			$this->respuestaErronea2 = $respuestaErronea2;
      $this->respuestaErronea3 = $respuestaErronea3;

 		}

  public function verQA(){
      $QA['Pregunta']= $this->getPregunta();
      $QA['respuestaCorrecta']= $this->getRespuestaCorrecta();
      $QA['respuestaErronea1']= $this->getRespuestaErronea1();
      $QA['respuestaErronea2']= $this->getRespuestaErronea2();
      $QA['respuestaErronea3']= $this->getRespuestaErronea3();
      return $QA;

  }

    /**
     * Get the value of Quizz
     *
     * @return mixed
     */
    public function getQuizz()
    {
        return $this->quizz;
    }

    /**
     * Set the value of Quizz
     *
     * @param mixed $quizz
     *
     * @return self
     */
    public function setQuizz($quizz)
    {
        $this->quizz = $quizz;

        return $this;
    }

    /**
     * Get the value of Pregunta
     *
     * @return mixed
     */
    public function getPregunta()
    {
        return $this->Pregunta;
    }

    /**
     * Set the value of Pregunta
     *
     * @param mixed $pregunta
     *
     * @return self
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get the value of Respuesta Correcta
     *
     * @return mixed
     */
    public function getRespuestaCorrecta()
    {
        return $this->respuestaCorrecta;
    }

    /**
     * Set the value of Respuesta Correcta
     *
     * @param mixed $respuestaCorrecta
     *
     * @return self
     */
    public function setRespuestaCorrecta($respuestaCorrecta)
    {
        $this->respuestaCorrecta = $respuestaCorrecta;

        return $this;
    }

    /**
     * Get the value of Respuesta Erronea
     *
     * @return mixed
     */
    public function getRespuestaErronea1()
    {
        return $this->respuestaErronea1;
    }

    /**
     * Set the value of Respuesta Erronea
     *
     * @param mixed $respuestaErronea1
     *
     * @return self
     */
    public function setRespuestaErronea1($respuestaErronea1)
    {
        $this->respuestaErronea1 = $respuestaErronea1;

        return $this;
    }

    /**
     * Get the value of Respuesta Erronea
     *
     * @return mixed
     */
    public function getRespuestaErronea2()
    {
        return $this->respuestaErronea2;
    }

    /**
     * Set the value of Respuesta Erronea
     *
     * @param mixed $respuestaErronea2
     *
     * @return self
     */
    public function setRespuestaErronea2($respuestaErronea2)
    {
        $this->respuestaErronea2 = $respuestaErronea2;

        return $this;
    }

    /**
     * Get the value of Respuesta Erronea
     *
     * @return mixed
     */
    public function getRespuestaErronea3()
    {
        return $this->respuestaErronea3;
    }

    /**
     * Set the value of Respuesta Erronea
     *
     * @param mixed $respuestaErronea3
     *
     * @return self
     */
    public function setRespuestaErronea3($respuestaErronea3)
    {
        $this->respuestaErronea3 = $respuestaErronea3;

        return $this;
    }

}






 ?>
