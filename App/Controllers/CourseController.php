<?php

namespace App\Controllers;

use App\Models\Course;
use Framework\Core\BaseController;
use Framework\Http\HttpException;
use Framework\Http\Request;
use Framework\Http\Responses\Response;

class CourseController extends BaseController
{
    public function authorize(Request $request, string $action): bool
    {
        return true;
    }

    public function index(Request $request): Response
    {
        $courses = Course::getAll();
        return $this->html(['courses' => $courses]);
    }

    public function add(Request $request): Response
    {
        return $this->html(['course' => new Course()], 'form');
    }

    public function edit(Request $request): Response
    {
        $course = Course::getOne($request->value('id'));
        if ($course == null) {
            throw new HttpException(404);
        }

        return $this->html(['course' => $course], 'form');
    }

    public function save(Request $request): Response
    {
        $id = $request->value('id');

        if ($id) {
            $course = Course::getOne($id);
            if ($course == null) {
                throw new HttpException(404);
            }
        } else {
            $course = new Course();
        }

        $course->setName($request->value('name'));
        $course->setCode($request->value('code'));
        $course->setDescription($request->value('description'));
        $course->setCapacity((int)$request->value('capacity'));
        $course->save();

        return $this->redirect($this->url('course.index'));
    }

    public function delete(Request $request): Response
    {
        $course = Course::getOne($request->value('id'));
        if ($course == null) {
            throw new HttpException(404);
        }

        $course->delete();
        return $this->redirect($this->url('course.index'));
    }
}
