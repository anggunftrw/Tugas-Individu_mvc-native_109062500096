<?php
class FilmController
{
    public function __construct(private Film $model) {}

    public function index(): void
    {
        $film = $this->model->getAll();
        require __DIR__ . '/../views/film/index.php';
    }

    public function create(): void
    {
        require __DIR__ . '/../views/film/create.php';
    }

    public function store(): void
    {
        $data = $this->validateInput($_POST);
        if ($this->model->insert($data)) {
            header('Location: index.php?page=film&success=created');
        } else {
            header('Location: index.php?page=film&error=create_failed');
        }
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $film = $this->model->findById($id);

        if (!$film) {
            http_response_code(404);
            exit('Data film tidak ditemukan.');
        }

        require __DIR__ . '/../views/film/edit.php';
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $data = $this->validateInput($_POST);
        if ($this->model->update($id, $data)) {
            header('Location: index.php?page=film&success=updated');
        } else {
            header('Location: index.php?page=film&error=update_failed');
        }
        exit;
    }

    public function delete(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        if ($this->model->delete($id)) {
            header('Location: index.php?page=film&success=deleted');
        } else {
            header('Location: index.php?page=film&error=delete_failed');
        }
        exit;
    }

    private function validateInput(array $input): array
    {
        $data = [
            'judul' => trim($input['judul'] ?? ''),
            'genre' => trim($input['genre'] ?? ''),
            'tahun_rilis' => trim($input['tahun_rilis'] ?? ''),
            'sutradara' => trim($input['sutradara'] ?? ''),
            'durasi' => trim($input['durasi'] ?? ''),
            'rating' => trim($input['rating'] ?? '')
        ];

        if ($data['judul'] === '' || $data['genre'] === '' || $data['tahun_rilis'] === '' ||
            $data['sutradara'] === '' || $data['durasi'] === '' || $data['rating'] === '') {
            exit('Semua field (judul, genre, tahun rilis, sutradara, durasi, rating) wajib diisi.');
        }

        if (!is_numeric($data['tahun_rilis']) || !is_numeric($data['durasi']) || !is_numeric($data['rating'])) {
            exit('Tahun rilis, durasi, dan rating harus berupa angka.');
        }

        $data['tahun_rilis'] = (int) $data['tahun_rilis'];
        $data['durasi'] = (int) $data['durasi'];
        $data['rating'] = (float) $data['rating'];

        return $data;
    }
}
?>