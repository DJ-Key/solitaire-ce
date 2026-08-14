<?php
namespace OCA\SolitaireCe\Controller;

use OCP\IRequest;
use OCP\AppFramework\Http\TemplateResponse;
use OCP\AppFramework\Controller;

class PageController extends Controller {
    private ?string $userId;

    public function __construct(string $AppName, IRequest $request, ?string $UserId){
        parent::__construct($AppName, $request);
        $this->userId = $UserId;
    }

    /**
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function index() {
        return new TemplateResponse('solitaire_ce', 'index');
    }
}

