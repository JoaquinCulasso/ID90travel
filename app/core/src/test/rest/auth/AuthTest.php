<?php

declare(strict_types=1);

namespace Id90travel\core\src\test\rest\auth;

use Id90travel\core\src\main\common\exception\IdUserDomainException;
use Id90travel\core\src\main\common\exception\MissingAirlineCodeException;
use Id90travel\core\src\main\common\exception\MissingPasswordException;
use Id90travel\core\src\main\common\exception\MissingUsernameException;
use Id90travel\core\src\main\rest\auth\contract\AuthClient;
use Id90travel\core\src\main\rest\auth\model\User;
use Id90travel\core\src\main\rest\auth\model\UserAuth;
use Id90travel\core\src\main\rest\auth\model\UserId;
use Id90travel\core\src\main\rest\auth\service\UserAuthentication;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{

    /**
     * @test
     * @noinspection PhpParamsInspection
     * @throws IdUserDomainException
     */
    public function authClientSuccess()
    {
        $authClientMock = $this->getAuthClientMock();
        $authClientMock->method('authUser')->willReturn($this->getUserFromJsonResponseMock(APP_DIRECTORY . "/core/src/test/resource/json/userAuthSuccessResponse.json"));
        $userAuthentication = new UserAuthentication($authClientMock);
        $user = $userAuthentication->userAuth(new UserAuth('F9','JOACO','1234','1'));
        $this->assertNotEmpty($user, 'user data is empty');
        $this->assertEquals('F9', $user->getAirline(), 'Attribute airline is different');
        $this->assertEquals('f9user', $user->getUsername(), 'Attribute username is different');
        $this->assertEquals('matias.ortiz+200@id90travel.com', $user->getEmail(), 'Attribute email is different');
    }

    /**
     * @test
     * @noinspection PhpParamsInspection
     * @throws MissingAirlineCodeException
     */
    public function authClientMissingAirlineException()
    {
        $authClientMock = $this->getAuthClientMock();
        $authClientMock->method('authUser')->willReturn($this->getUserFromJsonResponseMock(APP_DIRECTORY . "/core/src/test/resource/json/userAuthSuccessResponse.json"));
        $userAuthentication = new UserAuthentication($authClientMock);
        $this->expectException(MissingAirlineCodeException::class);
        $userAuthentication->userAuth(new UserAuth('','JOACO','1234','1'));
    }

    /**
     * @test
     * @noinspection PhpParamsInspection
     * @throws MissingUsernameException
     */
    public function authClientMissingUsernameException()
    {
        $authClientMock = $this->getAuthClientMock();
        $authClientMock->method('authUser')->willReturn($this->getUserFromJsonResponseMock(APP_DIRECTORY . "/core/src/test/resource/json/userAuthSuccessResponse.json"));
        $userAuthentication = new UserAuthentication($authClientMock);
        $this->expectException(MissingUsernameException::class);
        $userAuthentication->userAuth(new UserAuth('F9','','1234','1'));
    }

    /**
     * @test
     * @noinspection PhpParamsInspection
     * @throws MissingPasswordException
     */
    public function authClientMissingPasswordException()
    {
        $authClientMock = $this->getAuthClientMock();
        $authClientMock->method('authUser')->willReturn($this->getUserFromJsonResponseMock(APP_DIRECTORY . "/core/src/test/resource/json/userAuthSuccessResponse.json"));
        $userAuthentication = new UserAuthentication($authClientMock);
        $this->expectException(MissingPasswordException::class);
        $userAuthentication->userAuth(new UserAuth('F9','JOACO','','1'));
    }


    /**
     * @return MockObject
     */
    private function getAuthClientMock(): MockObject
    {
        return $this->createMock(AuthClient::class);
    }

    /**
     * @param string $filename
     * @return User
     * @throws IdUserDomainException
     */
    private function getUserFromJsonResponseMock(string $filename): User
    {
        $json = json_decode(file_get_contents($filename), true);
        return new User(
            new UserId($json['id']),
            $json['api_id'],
            $json['airline'],
            $json['username'],
            $json['first_name'],
            $json['last_name'],
            $json['email'],
            $json['date_of_hire'] ?? '',
            $json['employee_number'],
            $json['status'] ?? '',
            $json['station'] ?? '',
            $json['password_digest'] ?? '',
            $json['member_type'],
            $json['token'] ?? '',
            $json['state'],
            $json['state_changed_at'] ?? '',
            $json['accept_terms_of_service'],
            $json['lang'],
            $json['identity_id'],
            $json['id90_user_id'],
            $json['organization_id'],
            $json['currency'],
            $json['tutorial_shown'],
            $json['utm_source'] ?? '',
            $json['utm_medium'] ?? '',
            $json['confirmation_token'] ?? '',
            $json['confirmed_at'],
            $json['confirmation_sent_at'] ?? '',
            $json['created_at'],
            $json['verification_email'],
            $json['affiliation'],
            $json['review_sent'],
            $json['app_downloaded'],
            $json['delete_requested'] ?? '',
            $json['email_opt_out'],
            $json['profile_image_url'] ?? '',
            $json['password_updated_at'] ?? '',
            $json['utm_campaign'] ?? '',
            $json['review_denied'],
            $json['mfa_skipped'] ?? ''
        );
    }

}