<?php 

//Agrupa classes, Permite os mesmo nomes para diferentes elementos em diferentes partes do código.
namespace src\Services;

class FileService {
    private $file;
    private $maxSize = 1024 * 1024 * 10;
    private $allowedExtensions = ["png", "jpg", "
    jpeg", "gif"];
    private $allowedTypes = ["image/png", "image/jpg", "image/jpeg", "image/gif"];


    public function __construct($file) {
        $this->file = $file;
    }

    public function validate() {
        $erros = [];

        if ($this->file['error'] !== UPLOAD_ERR_OK) {
            $erros[] = "Erro no upload do arquivo.";
        }

        if (empty($this->file['name'])) {
            $erros[] = "Nenhum arquivo enviado.";
        }

        if ($this->file['size'] > $this->maxSize) {
            $erros[] = "Arquivo muito grande.";
        }

        $extension = pathinfo($this->file['name'], PATHINFO_EXTENSION);

        if (!in_array($extension, $this->allowedExtensions)) {
            $erros[] = "Extensão de aquivo não permitida.";
        }

        if (!in_array($this->file['type'], $this->allowedTypes)) {
            $erros[] = "Tipo de arquivo não permitido.";
        }

        return $erros;
    }

    public function saveFile() {
        $path = "../../uploads/";
        $newName = uniqid("php_Image-") . "." . pathinfo($this->file['name'], PATHINFO_EXTENSION);

        if (move_uploaded_file($this->file['tmp_name'], $path . $newName)) {
            return "Arquivo enviado com sucesso";
        }

        return "Erro ao mover o arquivo";
    }
}