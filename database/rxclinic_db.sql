USE [master]
GO
/****** Object:  Database [rxclinic_db]    Script Date: 3/3/2022 1:21:39 AM ******/
CREATE DATABASE [rxclinic_db]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'rxclinic_fb', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\rxclinic_fb.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'rxclinic_fb_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL15.SQLEXPRESS\MSSQL\DATA\rxclinic_fb_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT
GO
ALTER DATABASE [rxclinic_db] SET COMPATIBILITY_LEVEL = 150
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [rxclinic_db].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [rxclinic_db] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [rxclinic_db] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [rxclinic_db] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [rxclinic_db] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [rxclinic_db] SET ARITHABORT OFF 
GO
ALTER DATABASE [rxclinic_db] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [rxclinic_db] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [rxclinic_db] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [rxclinic_db] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [rxclinic_db] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [rxclinic_db] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [rxclinic_db] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [rxclinic_db] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [rxclinic_db] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [rxclinic_db] SET  DISABLE_BROKER 
GO
ALTER DATABASE [rxclinic_db] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [rxclinic_db] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [rxclinic_db] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [rxclinic_db] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [rxclinic_db] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [rxclinic_db] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [rxclinic_db] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [rxclinic_db] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [rxclinic_db] SET  MULTI_USER 
GO
ALTER DATABASE [rxclinic_db] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [rxclinic_db] SET DB_CHAINING OFF 
GO
ALTER DATABASE [rxclinic_db] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [rxclinic_db] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [rxclinic_db] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [rxclinic_db] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [rxclinic_db] SET QUERY_STORE = OFF
GO
USE [rxclinic_db]
GO
/****** Object:  Table [dbo].[admin]    Script Date: 3/3/2022 1:21:39 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[admin](
	[admin_id] [int] IDENTITY(1,1) NOT NULL,
	[admin_name] [varchar](10) NOT NULL,
	[email] [varchar](20) NOT NULL,
	[pword] [varchar](20) NULL,
PRIMARY KEY CLUSTERED 
(
	[admin_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[appointments]    Script Date: 3/3/2022 1:21:39 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[appointments](
	[app_id] [int] IDENTITY(1,1) NOT NULL,
	[app_date] [date] NOT NULL,
	[app_time] [time](7) NOT NULL,
	[reason] [varchar](50) NULL,
	[diagnosis] [varchar](50) NULL,
	[doctor_id] [int] NOT NULL,
	[patient_id] [int] NOT NULL,
	[status_id] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[app_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[appstatus]    Script Date: 3/3/2022 1:21:39 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[appstatus](
	[app_id] [int] NOT NULL,
	[status_id] [int] NOT NULL,
	[status_name] [varchar](10) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[departments]    Script Date: 3/3/2022 1:21:39 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[departments](
	[dept_id] [int] NOT NULL,
	[doctor_id] [int] NOT NULL,
	[dept_name] [varchar](15) NOT NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[doctors]    Script Date: 3/3/2022 1:21:39 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[doctors](
	[doctor_id] [int] IDENTITY(1,1) NOT NULL,
	[fname] [varchar](25) NOT NULL,
	[lname] [varchar](25) NOT NULL,
	[email] [varchar](20) NOT NULL,
	[pword] [varchar](20) NOT NULL,
	[dept_id] [int] NULL,
	[sched_id] [int] NOT NULL,
	[acc_status] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[doctor_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[patients]    Script Date: 3/3/2022 1:21:39 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[patients](
	[patient_id] [int] IDENTITY(1,1) NOT NULL,
	[fname] [varchar](25) NOT NULL,
	[lname] [varchar](25) NOT NULL,
	[age] [int] NOT NULL,
	[email] [varchar](20) NOT NULL,
	[pword] [varchar](20) NOT NULL,
	[contact_no] [int] NOT NULL,
	[p_address] [varchar](50) NOT NULL,
	[acc_status] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[patient_id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[sched]    Script Date: 3/3/2022 1:21:39 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[sched](
	[doctor_id] [int] NOT NULL,
	[sched_id] [int] NOT NULL,
	[sched_date] [date] NULL,
	[sched_time] [time](7) NULL
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[appointments]  WITH CHECK ADD  CONSTRAINT [fk_assigned_doctor] FOREIGN KEY([doctor_id])
REFERENCES [dbo].[doctors] ([doctor_id])
GO
ALTER TABLE [dbo].[appointments] CHECK CONSTRAINT [fk_assigned_doctor]
GO
ALTER TABLE [dbo].[appointments]  WITH CHECK ADD  CONSTRAINT [fk_assigned_patient] FOREIGN KEY([patient_id])
REFERENCES [dbo].[patients] ([patient_id])
GO
ALTER TABLE [dbo].[appointments] CHECK CONSTRAINT [fk_assigned_patient]
GO
ALTER TABLE [dbo].[appstatus]  WITH CHECK ADD  CONSTRAINT [fk_appstatus] FOREIGN KEY([app_id])
REFERENCES [dbo].[appointments] ([app_id])
GO
ALTER TABLE [dbo].[appstatus] CHECK CONSTRAINT [fk_appstatus]
GO
ALTER TABLE [dbo].[departments]  WITH CHECK ADD  CONSTRAINT [fk_department] FOREIGN KEY([doctor_id])
REFERENCES [dbo].[doctors] ([doctor_id])
GO
ALTER TABLE [dbo].[departments] CHECK CONSTRAINT [fk_department]
GO
ALTER TABLE [dbo].[sched]  WITH CHECK ADD  CONSTRAINT [fk_doctor_sched] FOREIGN KEY([doctor_id])
REFERENCES [dbo].[doctors] ([doctor_id])
GO
ALTER TABLE [dbo].[sched] CHECK CONSTRAINT [fk_doctor_sched]
GO
USE [master]
GO
ALTER DATABASE [rxclinic_db] SET  READ_WRITE 
GO
